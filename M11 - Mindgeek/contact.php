<!DOCTYPE html>
<html>
	<head>
		<title>TITRE DU PROJET</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- CSS Vendor -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
		<link href="https://fonts.googleapis.com/css?family=Candal" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<!-- CSS Perso -->
		<link rel="stylesheet" type="text/css" href="css/base.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
	</head>
	<body>
		<!--HEADER-->
		<header>
			<?php include("php/header.php"); ?>
		</header>
		<p id="search">
      <input type="search" placeholder="Que recherchez-vous ?" name="recherche">
    </p>
    <main>
      <h2>Contactez-nous</h2>
      <section>
        <article class="mail">
          <i class="fa fa-paper-plane" aria-hidden="true"></i>
          <p class="contact"><abbr title="adresse email">Mail</abbr> : <span><a href="mailto:contact@3wa.fr">contact@3wa.fr</a></span></p>
        </article>
        <article class="mail">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <p class="contact"><abbr title="Numéro de téléphone">Tel</abbr> : <span><a href="tel:+33-1-40-58-19-72">+33 1 40 58 19 72</a>
</span></p>
        </article>
        <article class="mail">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <p class="contact"><em><strong>MindGeek</strong></p>
          <p>46, rue René Clair</p>
          <p>75013Paris</p></em>
        </article>
      </section>
    </main>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6242.233572575128!2d2.31612129916174!3d48.86705935484506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc50dc75ccf%3A0x42f0f4fa01438416!2sFranklin+D.+Roosevelt!5e0!3m2!1sfr!2sfr!4v1451318946422" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    <?php include("php/footer.php"); ?>
  </html>
