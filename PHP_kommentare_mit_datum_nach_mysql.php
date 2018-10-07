<?php
	
	date_default_timezone_set('Europe/Zurich');
	$date = date("D d:m:Y / H:m:s") . "\n\n";
	
	$mysqli = new mysqli("<host>", "<benutzername>","<password>","<datenbank>",<portnummer>);
	$mysqli->set_charset('utf8');
	
	$text = $mysqli->real_escape_string($_POST['textarea1']);
	
	$erg = $mysqli->query( "INSERT INTO kommentare (text) VALUES ('$date" . "$text')" );
	
	if($erg){
        echo "<h1>Meldung Abgeschickt und Eingetragen!:)<h1>";
	} else {
        echo "<h1>Hat nicht geklappt! :(<h1>";
	}

	
	$mysqli->close();
	
	
	//Prozedural 2 Argumente sonst kann man strings nicht mehr Verketten!!
	//$text = mysqli_real_escape_string($mysqli, $_POST['textarea1'] );
?>
