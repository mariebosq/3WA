<!DOCTYPE html>
<html>
	<head>
		<title>TITRE DU PROJET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- CSS Vendor -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
		<link href="https://fonts.googleapis.com/css?family=Amaranth" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
		<!-- CSS Perso -->
		<link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript">
		$(window).load(function() {
			$('.flexslider').flexslider({
				directionNav: false,
				controlNav: false
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
			<p>Pour toute commande effectuée avant le 20 décembre</p>
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li><img src="img/slider/1.jpg" alt="Photo du slider"></li>
						<li><img src="img/slider/2.jpg" alt="Photo du slider"></li>
					</ul>
			</div>
		</section>

			<section id="thes">
				<h2>Choisssez votre thé</h2>

				<img src="img/tea/1.jpg" alt="thé noir">
				<img src="img/tea/2.jpg" alt="thé vert">
				<img src="img/tea/3.jpg" alt="Oolong">
				<img src="img/tea/4.jpg" alt="thé blanc">
				<img src="img/tea/5.jpg" alt="Rooibos">
			</section>


		</main>
		<!--FOOTER-->
		<?php include("footer.php"); ?>
	</body>
</html>
