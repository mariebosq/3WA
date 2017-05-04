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
		<form action="index.php" method="POST">
      <input type="champ" placeholder="Que recherchez-vous ?" name="recherche">
    </form>
    <main>
      <h2>Le serveur dédié</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <section>
        <article class="cloud">
          <p class="title">Serveur dédié GAME</p>
          <ul>
            <li>Intel e5-16582</li>
            <li>e5 fdg55456</li>
            <li>3,5 sdg ghs e</li>
            <li>ddr3 ecc 1600 mhz</li>
            <li>2x480go ssd raid soft</li>
          </ul>
          <p class="forfait">159,99$ HT/Mois</p>
          <p class="command"><a href="#">Commander</a></p>
        </article>
        <article class="cloud">
          <p class="title">Serveur dédié STOCKAGE</p>
          <ul>
            <li>Intel e5-16582</li>
            <li>e5 fdg55456</li>
            <li>3,5 sdg ghs e</li>
            <li>ddr3 ecc 1600 mhz</li>
            <li>2x480go ssd raid soft</li>
            <li>vrack 10 gpskf</li>
          </ul>
          <p class="forfait">319,99$ HT/Mois</p>
          <p class="command"><a href="#">Commander</a></p>
        </article>
        <article class="cloud">
          <p class="title">Serveur dédié HAUT DE GAMME</p>
          <ul>
            <li>Intel e5-16582</li>
            <li>e5 fdg55456</li>
            <li>3,5 sdg ghs e</li>
            <li>ddr3 ecc 1600 mhz</li>
            <li>2x480go ssd raid soft</li>
            <li>vrack 10 gpskf</li>
          </ul>
          <p class="forfait">559,99$ HT/Mois</p>
          <p class="command"><a href="#">Commander</a></p>
        </article>
      </section>
    </main>
    <?php include("php/footer.php"); ?>
  </body>
</head>
