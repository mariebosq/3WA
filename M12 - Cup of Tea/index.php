<!DOCTYPE html>
<html>
	<head>
		<title>TITRE DU PROJET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- CSS Vendor -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
		<!-- CSS Perso -->
		<link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>

		</script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				// directionNav: false
			});
		});
	</script>
	</head>
	<body>
		<!--HEADER-->
		<?php include("header.php"); ?>
		<!--MAIN CONTENT-->
		<main>
			<h1>C'est Noël, profitez-en !</h1>
			<img src="img/offre-noel.jpg" alt="Offre de Noel">
			<p id="legend">Pour toute commande effectuée avant le 20 décembre</p>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="img/slider/1.jpg" alt="Photo du slider"></li>
						<li><img src="img/slider/2.jpg" alt="Photo du slider"></li>
					</ul>
				</div>
			</section>

			<div class="clear"></div>

			<section id="teas">
				<h2>Choisissez votre thé</h2>
				<ul id="teas-list">
					<li>
						<img src="img/tea/1.jpg" alt="thé noir" class="min">
						<h3>Thé noir</h3>
					</li>
					<li>
						<img src="img/tea/2.jpg" alt="thé vert" class="min">
						<h3>Thé vert</h3>
					</li>
					<li >
						<img src="img/tea/3.jpg" alt="Oolong" class="min">
						<h3>Oolong</h3>
					</li>
					<li>
						<img src="img/tea/4.jpg" alt="thé blanc" class="min">
						<h3>Thé blanc</h3>
					</li>
					<li>
						<img src="img/tea/5.jpg" alt="Rooibos" class="min">
						<h3>Rooibos</h3>
					</li>
				</ul>
				
			</section>

			<section id="presentation">
				<article class="type">
					<h2>Notre nouveauté</h2>
					<img src="img/product/product1.jpg" alt="hammam">
					<p class="legend">Thé du hammam</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>A partir de</p>
					<p><strong>8,50$</strong></p>
					<p class="bouton">voir ce produit</p>
				</article>
				<article class="type">
					<h2>Notre best-seller</h2>
					<img src="img/product/product2.jpg" alt="infusion">
					<p class="legend">Infusion Herboriste</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>A partir de</p>
					<p><strong>7,60$</strong></p>
					<p class="bouton">voir ce produit</p>
				</article>
				<article class="type">
					<h2>Notre coup de coeur</h2>
					<img src="img/product/product3.jpg" alt="hammam">
					<p class="legend">Blue of London</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>A partir de</p>
					<p><strong>9,00$</strong></p>
					<p class="bouton">voir ce produit</p>
				</article>
			</section>

		</main>
		<!--FOOTER-->
		<?php include("footer.php"); ?>
	</body>
</html>
