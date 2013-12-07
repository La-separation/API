<?php
	$name = 'local_db.zip';
	$to = './';
	
	$zip = new ZipArchive;
	if ($zip->open($name) === TRUE) {
		$zip->extractTo($to);
		$zip->close();
		echo 'Fichier "' . $name . '" déziiiiipé';
	} else {
		echo 'Fichier "' . $name . '" NON déziiiiipé :(';
	}