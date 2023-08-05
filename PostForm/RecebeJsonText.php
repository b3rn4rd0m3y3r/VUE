<?php
	$json = file_get_contents("php://input");
	$file = fopen($_GET["Id"].".txt", "w") or die("erro: Não consegui abrir o arquivo!");
	fwrite($file, $json);
	fclose($file);	
	echo $json;
?>