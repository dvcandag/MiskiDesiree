<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Etequietas Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Título de la página -->
    <title>Contáctenos</title>

    <!-- Favicon -->
<link rel="shortcut icon" href="assets/images/logo/Favicon.svg" type="image/x-icon">

    <!-- Enlace a los archivos CSS (Bootstrap comprimido + personalizados para contacto) -->
    
    <link rel="stylesheet" href="assets/css/contacto.css">
    <!-- Google Fonts para estilo moderno -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
<main class="contact-page">



    <!-- Comienza el área del banner -->
    <section class="contact-hero">
        <div class="hero-inner">
            <h1>Contacta con <span style="color:var(--accent)">Miski Desiree</span></h1>
            <p>¿Tienes una reserva, pedido o pregunta? Escribe y te responderemos lo antes posible.</p>
        </div>
    </section>
    <!-- Fin del área de banner -->
    <section class="contact-wrap">
        <div class="contact-grid">
            <div>
                <div class="info-card">
                    <div class="info-row">
                        <div class="icon">📍</div>
                        <div>
                            <h4>Visítanos</h4>
                            <p>Frente a la Plaza de Armas S/N - Chancay</p>
                        </div>
                    </div>
                    <hr style="opacity:.06;margin:12px 0">
                    <div class="info-row">
                        <div class="icon">📞</div>
                        <div>
                            <h4>Teléfono</h4>
                            <p>976 775 380 — Lun a Vie 9:00 - 18:00</p>
                        </div>
                    </div>
                    <hr style="opacity:.06;margin:12px 0">
                    <div class="info-row">
                        <div class="icon">✉️</div>
                        <div>
                            <h4>Correo</h4>
                            <p>contacto@miski-desiree.com</p>
                        </div>
                    </div>
                    <hr style="opacity:.06;margin:12px 0">
                    <div style="margin-top:10px">
                        <h4>Horario</h4>
                        <p class="kv-list"><span class="kv"><span class="k">Lun - Vie</span> <strong>9:00 - 18:00</strong></span><span class="kv"><span class="k">Sáb - Dom</span> <strong>8:00 - 23:00</strong></span></p>
                    </div>
                </div>
                <div style="height:16px"></div>
                <div class="info-card">
                    <h4>Encuéntranos en redes</h4>
                    <p class="kv">Síguenos para ofertas y platos del día</p>
                    <div style="margin-top:10px;display:flex;gap:8px">
                        <a class="socials" href="#" style="padding:8px;border-radius:8px;background:rgba(255,255,255,0.03);text-decoration:none;color:var(--white)">Facebook</a>
                        <a class="socials" href="#" style="padding:8px;border-radius:8px;background:rgba(255,255,255,0.03);text-decoration:none;color:var(--white)">Instagram</a>
                    </div>
                </div>
            </div>

            <div>
                <div class="contact-form-card">
                    <form id="contact-form">
                        <div class="field">
                            <input id="name" name="name" type="text" placeholder=" " required>
                            <label for="name">Nombre completo</label>
                        </div>
                        <div class="field">
                            <input id="email" name="email" type="email" placeholder=" " required>
                            <label for="email">Correo electrónico</label>
                        </div>
                        <div class="field">
                            <input id="subject" name="subject" type="text" placeholder=" " required>
                            <label for="subject">Asunto</label>
                        </div>
                        <div class="field">
                            <textarea id="message" name="message" placeholder=" "></textarea>
                            <label for="message">Mensaje</label>
                        </div>
                        <div style="display:flex;gap:12px;align-items:center;justify-content:flex-end">
                            <button class="btn-submit" type="submit">Enviar mensaje</button>
                        </div>
                    </form>

                    <div class="contact-map" id="contact-map"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin del área de formulario del contacto -->


   

    <!-- Enlaces a Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I"></script>
    <script src="assets/js/vendor/gmaps.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
