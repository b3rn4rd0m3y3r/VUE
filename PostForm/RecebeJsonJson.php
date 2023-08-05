<?php
	$json = file_get_contents("php://input");
	$file = fopen($_GET["Id"].".json", "w");
	fwrite($file, $json);
	fclose($file);	
	echo $json;
?>