
<!-- Include del header: cabecera responsiva en HTML5 para Miski Desiree -->
<link rel="stylesheet" href="/miskidesiree/assets/css/header.css">
<link rel="stylesheet" href="/miskidesiree/assets/css/logo.css">

<header class="site-header" role="banner">
	<div class="container">
		<a  href="/miskidesiree/index.php">

			<img src="/miskidesiree/assets/images/logo/logo2.png"  />

		</a>

			<nav class="site-nav" role="navigation" aria-label="Navegación principal">
				<button class="nav-toggle" aria-expanded="false" aria-controls="main-navigation">
					<span class="sr-only">Abrir menú</span>
					<span class="hamburger" aria-hidden="true">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</button>

			<ul id="main-navigation" class="nav-links">
				<li><a href="/miskidesiree/index.php">Inicio</a></li>
				<li><a href="/miskidesiree/menu.php">Menú</a></li>
				<li><a href="/miskidesiree/nosotros.php">Nosotros</a></li>
				<li><a href="/miskidesiree/contacto.php">Contacto</a></li>
				<li><a class="cta" href="/miskidesiree/reservacion.php">Reservar ahora</a></li>
			</ul>
		</nav>
	</div>
		<script>
			(function(){
				// Alterna el menú móvil y anima la hamburguesa
				var btn = document.querySelector('.nav-toggle');
				var nav = document.getElementById('main-navigation');
				if(!btn || !nav) return;
						btn.addEventListener('click', function(){
							var open = nav.classList.toggle('open');
							btn.classList.toggle('open', open);
							btn.setAttribute('aria-expanded', open ? 'true' : 'false');
						});
						// Cerrar menú si se hace resize a desktop
						window.addEventListener('resize', function(){
							if(window.innerWidth > 900){
								nav.classList.remove('open');
								btn.classList.remove('open');
								btn.setAttribute('aria-expanded','false');
							}
						});

						// Header transparente sobre hero, se añade clase .scrolled al hacer scroll
						var header = document.querySelector('.site-header');
						function checkScroll(){
							if(!header) return;
							if(window.scrollY > 40){
								header.classList.add('scrolled');
							} else {
								header.classList.remove('scrolled');
							}
						}
						checkScroll();
						window.addEventListener('scroll', function(){ checkScroll(); });
			})();
	</script>
</header>
