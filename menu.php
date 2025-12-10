<!DOCTYPE html>
<html lang="es">
<head>

    <!-- Etequietas Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Título de la página -->
    <title>Menú</title>


    <link rel="stylesheet" href="assets/css/menu.css">
</head>
<body>

    <!-- Comienza el área de encabezado -->
	<header class="header-area header-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="index.html"><img src="assets/images/logo/logo2.png" alt="logo"></a>
                    <!-- Comienza el área de comida (moderno) -->
                    <section class="food-area section-padding">
                        <div class="container">
                            <div class="section-top text-center mb-3">
                                <h3><span class="style-change">Especialidad</span> de la casa</h3>
                                <p class="pt-2">Platos seleccionados por nuestros chefs — frescos y llenos de sabor.</p>
                            </div>

                            <div class="menu-filters">
                                <button class="filter-btn active" data-filter="all">Todos</button>
                                <button class="filter-btn" data-filter="entradas">Entradas</button>
                                <button class="filter-btn" data-filter="principales">Principales</button>
                                <button class="filter-btn" data-filter="postres">Postres</button>
                                <button class="filter-btn" data-filter="bebidas">Bebidas</button>
                            </div>

                            <div class="food-grid" id="food-grid">
                                <div class="single-food" data-category="entradas" data-name="Mexican Eggrolls" data-desc="Rollo crujiente con relleno mexicano y salsa especial." data-price="$14.50">
                                    <div class="food-img"><img src="assets/images/food1.jpg" alt="Mexican Eggrolls"></div>
                                    <div class="food-content">
                                        <div class="food-meta">
                                            <h5>Mexican Eggrolls</h5>
                                            <span class="price-pill">$14.50</span>
                                        </div>
                                        <p class="food-desc">Rollo crujiente con relleno mexicano y salsa especial.</p>
                                        <div class="food-actions">
                                            <button class="btn-ghost" data-action="view">Ver</button>
                                            <button class="btn-primary" data-action="order">Pedir</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-food" data-category="principales" data-name="Chicken Burger" data-desc="Hamburguesa de pollo jugosa con aderezo casero." data-price="$9.50">
                                    <div class="food-img"><img src="assets/images/food2.jpg" alt="Chicken Burger"></div>
                                    <div class="food-content">
                                        <div class="food-meta">
                                            <h5>Chicken Burger</h5>
                                            <span class="price-pill">$9.50</span>
                                        </div>
                                        <p class="food-desc">Hamburguesa de pollo jugosa con aderezo casero.</p>
                                        <div class="food-actions">
                                            <button class="btn-ghost" data-action="view">Ver</button>
                                            <button class="btn-primary" data-action="order">Pedir</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-food" data-category="principales" data-name="Topu Lasange" data-desc="Lasaña gratinada con salsa especial del chef." data-price="$12.50">
                                    <div class="food-img"><img src="assets/images/food3.jpg" alt="Topu Lasange"></div>
                                    <div class="food-content">
                                        <div class="food-meta">
                                            <h5>Topu Lasange</h5>
                                            <span class="price-pill">$12.50</span>
                                        </div>
                                        <p class="food-desc">Lasaña gratinada con salsa especial del chef.</p>
                                        <div class="food-actions">
                                            <button class="btn-ghost" data-action="view">Ver</button>
                                            <button class="btn-primary" data-action="order">Pedir</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-food" data-category="principales" data-name="Pepper Potatoes" data-desc="Papas estilo Pepper, crujientes y especiadas." data-price="$14.50">
                                    <div class="food-img"><img src="assets/images/food4.jpg" alt="Pepper Potatoes"></div>
                                    <div class="food-content">
                                        <div class="food-meta">
                                            <h5>Pepper Potatoes</h5>
                                            <span class="price-pill">$14.50</span>
                                        </div>
                                        <p class="food-desc">Papas estilo Pepper, crujientes y especiadas.</p>
                                        <div class="food-actions">
                                            <button class="btn-ghost" data-action="view">Ver</button>
                                            <button class="btn-primary" data-action="order">Pedir</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-food" data-category="entradas" data-name="Bean Salad" data-desc="Ensalada fresca de legumbres con vinagreta." data-price="$8.50">
                                    <div class="food-img"><img src="assets/images/food5.jpg" alt="Bean Salad"></div>
                                    <div class="food-content">
                                        <div class="food-meta">
                                            <h5>Bean Salad</h5>
                                            <span class="price-pill">$8.50</span>
                                        </div>
                                        <p class="food-desc">Ensalada fresca de legumbres con vinagreta.</p>
                                        <div class="food-actions">
                                            <button class="btn-ghost" data-action="view">Ver</button>
                                            <button class="btn-primary" data-action="order">Pedir</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="single-food" data-category="principales" data-name="Meatball Hoagie" data-desc="Bocadillo caliente con albóndigas y queso fundido." data-price="$11.50">
                                    <div class="food-img"><img src="assets/images/food6.jpg" alt="Meatball Hoagie"></div>
                                    <div class="food-content">
                                        <div class="food-meta">
                                            <h5>Meatball Hoagie</h5>
                                            <span class="price-pill">$11.50</span>
                                        </div>
                                        <p class="food-desc">Bocadillo caliente con albóndigas y queso fundido.</p>
                                        <div class="food-actions">
                                            <button class="btn-ghost" data-action="view">Ver</button>
                                            <button class="btn-primary" data-action="order">Pedir</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                            </div>
                            <p class="pt-3">Lorem, ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>bean salad</h5>
                                <span class="style-change">$8.50</span>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="assets/images/food6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>beatball hoagie</h5>
                                <span class="style-change">$11.50</span>
                            </div>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Fin del área de comida -->

    


    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Script para filtros y modal en menú -->
    <script>
    (function(){
        var filters = document.querySelectorAll('.filter-btn');
        var items = document.querySelectorAll('.single-food');
        filters.forEach(function(btn){
            btn.addEventListener('click', function(){
                filters.forEach(f=>f.classList.remove('active'));
                btn.classList.add('active');
                var fcat = btn.getAttribute('data-filter');
                items.forEach(function(it){
                    var cat = it.getAttribute('data-category');
                    if(fcat==='all' || cat===fcat) it.style.display='block'; else it.style.display='none';
                });
            });
        });

        // Modal viewer
        var backdrop = document.createElement('div');
        backdrop.className = 'modal-backdrop';
        backdrop.innerHTML = '<div class="modal" role="dialog" aria-modal="true"><div class="m-img"><img src="" alt=""></div><div class="m-body"><h3></h3><p class="m-desc"></p><div class="m-tags"></div><div style="text-align:right;margin-top:8px"><button class="btn-primary m-order">Pedir</button> <button class="btn-ghost m-close">Cerrar</button></div></div></div>';
        document.body.appendChild(backdrop);
        function openModal(data){
            backdrop.querySelector('img').src = data.img;
            backdrop.querySelector('h3').textContent = data.name + ' — ' + data.price;
            backdrop.querySelector('.m-desc').textContent = data.desc;
            var tags = backdrop.querySelector('.m-tags'); tags.innerHTML = '<span>Delicioso</span><span>Recomendado</span>';
            backdrop.classList.add('open');
        }
        function closeModal(){ backdrop.classList.remove('open'); }
        backdrop.addEventListener('click', function(e){ if(e.target===backdrop || e.target.classList.contains('m-close')) closeModal(); });

        document.querySelectorAll('[data-action="view"]').forEach(function(btn){
            btn.addEventListener('click', function(){
                var item = btn.closest('.single-food');
                openModal({ img: item.querySelector('img').src, name: item.getAttribute('data-name'), desc: item.getAttribute('data-desc'), price: item.getAttribute('data-price') });
            });
        });

        // order buttons — placeholder behavior (puedes integrar con tu flujo de reservas)
        document.querySelectorAll('[data-action="order"]').forEach(function(b){ b.addEventListener('click', function(){ var it = b.closest('.single-food'); alert('Añadido al pedido: ' + it.getAttribute('data-name')); }); });
    })();
    </script>
</body>
</html>
