<?php 

include 'utilities.php';

$checks = $_POST['tache'];

//var_dump($checks);

$listeTaches = loadTasks('tasks.csv');

$file = fopen('tasks.csv', 'w');

for ($i = 0; $i < count($listeTaches); $i++){

	if (!in_array($i, $checks)) {		
		fputcsv($file, $listeTaches[$i]);
	}

}

fclose($file);

// Redirection vers page principale
	header('Location: index.php');
	exit;

?>