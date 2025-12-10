<?php
/**
 * RESERVACIÓN API - BACKEND HANDLER
 * Processes reservation requests, validates data, and stores in JSON file
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// Handle preflight requests
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Only accept POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido.']);
    exit();
}

// Get JSON input
$input = file_get_contents('php://input');
$data = json_decode($input, true);

// Initialize response
$response = ['success' => false, 'message' => 'Error desconocido.'];

try {
    // ============================================
    // Server-side Validation
    // ============================================

    // Validate required fields
    if (empty($data['name']) || empty($data['email']) || empty($data['phone']) || 
        empty($data['date']) || empty($data['time']) || empty($data['guests']) || 
        empty($data['occasion'])) {
        throw new Exception('Faltan campos requeridos.');
    }

    // Validate name
    $name = trim($data['name']);
    if (strlen($name) < 3) {
        throw new Exception('El nombre debe tener al menos 3 caracteres.');
    }
    if (!preg_match('/^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$/', $name)) {
        throw new Exception('El nombre contiene caracteres inválidos.');
    }

    // Validate email
    $email = trim($data['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception('El correo electrónico es inválido.');
    }

    // Validate phone
    $phone = trim($data['phone']);
    $phone_clean = preg_replace('/\s+/', '', $phone);
    if (!preg_match('/^(\+51|0)?9\d{8}$/', $phone_clean)) {
        throw new Exception('El número de teléfono es inválido.');
    }

    // Validate date
    $date = $data['date'];
    $date_obj = DateTime::createFromFormat('Y-m-d', $date);
    if (!$date_obj || $date_obj->format('Y-m-d') !== $date) {
        throw new Exception('La fecha es inválida.');
    }
    
    $today = new DateTime();
    $today->setTime(0, 0, 0);
    if ($date_obj < $today) {
        throw new Exception('La fecha debe ser igual o posterior a hoy.');
    }

    // Validate time (HH:MM format)
    $time = $data['time'];
    if (!preg_match('/^\d{2}:\d{2}$/', $time)) {
        throw new Exception('La hora es inválida.');
    }

    // Validate guests (1-12)
    $guests = intval($data['guests']);
    if ($guests < 1 || $guests > 12) {
        throw new Exception('El número de personas debe estar entre 1 y 12.');
    }

    // Validate occasion
    $valid_occasions = ['normal', 'cumpleaños', 'aniversario', 'reunion', 'otro'];
    $occasion = $data['occasion'];
    if (!in_array($occasion, $valid_occasions)) {
        throw new Exception('El tipo de ocasión es inválido.');
    }

    // ============================================
    // Store Reservation
    // ============================================

    // Create reservations data directory if not exists
    $data_dir = __DIR__ . '/../data';
    if (!is_dir($data_dir)) {
        mkdir($data_dir, 0755, true);
    }

    $reservations_file = $data_dir . '/reservaciones.json';

    // Load existing reservations
    $reservations = [];
    if (file_exists($reservations_file)) {
        $json_content = file_get_contents($reservations_file);
        $reservations = json_decode($json_content, true) ?: [];
    }

    // Create new reservation
    $reservation = [
        'id' => uniqid('RES-', true),
        'name' => $name,
        'email' => $email,
        'phone' => $phone_clean,
        'date' => $date,
        'time' => $time,
        'guests' => $guests,
        'occasion' => $occasion,
        'requests' => trim($data['requests'] ?? ''),
        'created_at' => date('Y-m-d H:i:s'),
        'status' => 'pendiente'
    ];

    // Add to reservations array
    $reservations[] = $reservation;

    // Save to file
    if (!file_put_contents($reservations_file, json_encode($reservations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE))) {
        throw new Exception('No se pudo guardar la reservación. Intenta de nuevo.');
    }

    // ============================================
    // Send Confirmation Email (Optional)
    // ============================================

    sendConfirmationEmail($reservation);

    // ============================================
    // Success Response
    // ============================================

    $response = [
        'success' => true,
        'message' => '¡Tu reservación ha sido confirmada! Recibirás un email de confirmación en breve.',
        'reservation_id' => $reservation['id']
    ];

} catch (Exception $e) {
    $response = [
        'success' => false,
        'message' => $e->getMessage()
    ];
    http_response_code(400);
}

// Send JSON response
echo json_encode($response, JSON_UNESCAPED_UNICODE);

// ============================================
// Helper Functions
// ============================================

/**
 * Send confirmation email to the guest
 */
function sendConfirmationEmail($reservation) {
    try {
        $to = $reservation['email'];
        $subject = 'Confirmación de Reservación — Miski Desirée';

        // Email body
        $body = "
<!DOCTYPE html>
<html>
<head>
    <meta charset='UTF-8'>
    <style>
        body { font-family: Arial, sans-serif; background: #f5f5f5; }
        .container { max-width: 600px; margin: 0 auto; background: #fff; padding: 20px; border-radius: 8px; }
        .header { color: #ffb606; text-align: center; border-bottom: 2px solid #ffb606; padding-bottom: 20px; }
        .header h1 { margin: 0; }
        .content { padding: 20px 0; }
        .detail-row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #eee; }
        .detail-row strong { color: #333; }
        .detail-row span { color: #666; }
        .footer { text-align: center; color: #999; font-size: 12px; padding-top: 20px; border-top: 1px solid #eee; }
        .btn { display: inline-block; padding: 10px 20px; background: #ffb606; color: #000; text-decoration: none; border-radius: 4px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class='container'>
        <div class='header'>
            <h1>¡Reservación Confirmada!</h1>
        </div>
        <div class='content'>
            <p>Hola <strong>{$reservation['name']}</strong>,</p>
            <p>Tu reservación ha sido confirmada. Aquí están los detalles:</p>
            
            <div class='detail-row'>
                <strong>ID de Reservación:</strong>
                <span>{$reservation['id']}</span>
            </div>
            <div class='detail-row'>
                <strong>Fecha:</strong>
                <span>" . formatDate($reservation['date']) . "</span>
            </div>
            <div class='detail-row'>
                <strong>Hora:</strong>
                <span>{$reservation['time']}</span>
            </div>
            <div class='detail-row'>
                <strong>Número de Personas:</strong>
                <span>{$reservation['guests']}</span>
            </div>
            <div class='detail-row'>
                <strong>Ocasión:</strong>
                <span>" . ucfirst($reservation['occasion']) . "</span>
            </div>
            
            <p style='margin-top: 20px;'>Si necesitas hacer cambios o tienes alguna pregunta, no dudes en contactarnos al (01) 234-5678 o responde a este email.</p>
            
            <p>¡Esperamos verte pronto en Miski Desirée!</p>
            <p>El Equipo de Miski Desirée</p>
        </div>
        <div class='footer'>
            <p>&copy; 2024 Miski Desirée. Todos los derechos reservados.</p>
        </div>
    </div>
</body>
</html>";

        // Headers
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8\r\n";
        $headers .= "From: reservas@miski-desiree.com\r\n";

        // Send email (non-blocking - don't fail if email doesn't send)
        @mail($to, $subject, $body, $headers);

    } catch (Exception $e) {
        // Log email error but don't fail the reservation
        error_log('Email send error: ' . $e->getMessage());
    }
}

/**
 * Format date in Spanish
 */
function formatDate($date_str) {
    $date = new DateTime($date_str);
    $months = [
        'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio',
        'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'
    ];
    $month = $months[(int)$date->format('n') - 1];
    return $date->format('d') . ' de ' . $month . ' de ' . $date->format('Y');
}
?>
