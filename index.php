<?php
// Página principal que utiliza los includes para header y footer
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Miski Desirée</title>
    <link rel="shortcut icon" href="assets/images/logo/Favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>
<main>
    <section class="hero-home" style="background-image: url('assets/images/banner-bg.jpg'); background-size:cover; background-position:center; padding:90px 0; color:#fff;">
        <div class="container text-center">
            <h1 style="font-size:44px; font-weight:800; margin-bottom:12px;">Bienvenidos a Miski Desirée</h1>
            <p style="max-width:900px; margin:0 auto 18px; color:rgba(255,255,255,0.92);">Sabores de la tierra, técnica contemporánea y una experiencia cálida. Reserva tu mesa y descubre nuestros platos estrella.</p>
            <div style="margin-top:18px;"><a class="btn btn-primary" href="reservacion.php">Reservar ahora</a> <a class="btn btn-ghost" href="menu.html">Ver menú</a></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-top text-center mb-4">
                <h2>Nuestras especialidades</h2>
                <p class="muted">Platos creados por nuestro chef con productos de estación.</p>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="padding:18px; border-radius:12px; box-shadow:0 18px 48px rgba(12,10,9,0.06);">
                        <img src="assets/images/comida1.jpg" alt="plato" style="width:100%; border-radius:8px;">
                        <h5 style="margin-top:12px;">Garlic green beans</h5>
                        <p class="muted">Judías verdes salteadas con ajo tostado y limón.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding:18px; border-radius:12px; box-shadow:0 18px 48px rgba(12,10,9,0.06);">
                        <img src="assets/images/comida2.jpg" alt="plato" style="width:100%; border-radius:8px;">
                        <h5 style="margin-top:12px;">Lemon rosemary chicken</h5>
                        <p class="muted">Pollo al romero con reducción de cítricos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="padding:18px; border-radius:12px; box-shadow:0 18px 48px rgba(12,10,9,0.06);">
                        <img src="assets/images/comida3.jpg" alt="plato" style="width:100%; border-radius:8px;">
                        <h5 style="margin-top:12px;">Sushi roll especial</h5>
                        <p class="muted">Selección del chef con topping crocante.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>

<!-- Scripts mínimos: jQuery, Bootstrap y main -->
<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>
