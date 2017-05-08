<?php 

//var_dump($_POST);

	$titre = $_POST['titre'];
	$description = $_POST['description'];
	$jour = $_POST['jour'];
	$mois = $_POST['mois'];
	$annee = $_POST['annee'];

	$priority = $_POST['priorite'];

	$file = fopen('tasks.csv', 'a+');
	$params = [$titre, $description, $annee . '-' . $mois . '-' . $jour, $priority];
	fputcsv($file, $params);

	fclose($file);


	// Redirection vers page principale
	header('Location: index.php');
	exit;
?>