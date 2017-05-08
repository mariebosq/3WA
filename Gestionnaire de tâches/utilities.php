<?php
	function loadTasks($filename) {	
		$tabl = [];

		// Si le fichier existe
		if (($file = fopen($filename, 'r')) !== FALSE) {
			// 
			while (($data = fgetcsv($file)) !== FALSE) {
				array_push($tabl, $data);
			}
		}

		fclose($file);
		return $tabl;
	}
?>