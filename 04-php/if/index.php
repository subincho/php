<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Subi if</title>
		<link rel="stylesheet" href="style.css">
    </head>
    <body>
		<div>
<?php
	$a=64;
	if ($a===15){
		echo "аз съм 15";
	} else if ($a>26){
		echo "по-голямо от 26";
	} else if ($a<=26){
		echo "по-малко или равно от 64";
	}
?>
		</div>
    </body>
</html>