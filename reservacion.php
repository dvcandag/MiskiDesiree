<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva Nocturna | Miski Desirée</title>
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/reservacion.css">
</head>
<body class="reservacion-page">

<?php include __DIR__ . '/includes/header.php'; ?>




<!-- =====================
     SECCIÓN BANNER
===================== -->
<section class="banner">

    <!-- Fondo curvo decorativo -->
    <div class="curve"></div>

    <!-- Contenedor general -->
    <div class="banner-grid">

        <!-- Imagen grande -->
        <div class="food-img">
            <img src="assets/images/comida3.jpg" >

        <!-- Texto -->
        <div class="banner-text">
            <h3 class="sub">Miski </h3>
            <h1 class="title">Desirée</h1>

            <h1 class="title">¡VISITANOS!</h1>
            
            <p class="desc">
Planifica tu próxima salida con nosotros y reserva tu lugar.
Déjanos tus datos y nos comunicaremos contigo lo antes posible..</p>

            <button class="btn" onclick="openForm()">Reservación</button>
        </div>

    </div>
</section>


<!-- =====================
     FORMULARIO POPUP
===================== -->
<div id="formContainer" class="popup">
    <div class="popup-content">
        
        <div class="popup-header">
            <h2>Miski Desirée</h2>
            <p>Reserva tu mesa</p>
            <span class="close" onclick="closeForm()"><i class="fas fa-times"></i></span>
        </div>

        <form class="popup-form">
            <input type="text" placeholder="Nombre completo" required>
            <input type="email" placeholder="Correo electrónico" required>
            <input type="date" required>
            <textarea placeholder="Mensaje o Solicitudes Especiales (opcional)"></textarea>
            
            <div class="terms-conditions-box">
                <h4>Términos de la Reserva Nocturna:</h4>
                <ul class="terms-list">
                    <li><i class="fas fa-check-circle"></i>Confirmación obligatoria: La reserva solo se considera confirmada al recibir un correo electrónico de validación por parte del restaurante.</li>
                    <li><i class="fas fa-exclamation-triangle"></i> Disponibilidad: Actualmente, no se aceptan reservas para los días viernes, sábados, domingos ni días feriados (días festivos).</li>
                </ul>
            </div>
            
            <button type="submit" class="btn-submit-popup">Confirmar Reserva</button>
        </form>

    </div>
</div>



<script src="script.js"></script>

</body>
</html>





<?php include __DIR__ . '/includes/footer.php'; ?>

<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/reservacion.js"></script>
</body>
</html>