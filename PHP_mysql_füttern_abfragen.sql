<?php

	$mysqli = new mysqli("localhost", "root","","test",3306);//mindestens 3 => (host, benutzername, passwort(""), [ datenbank, port ])
	$mysqli->set_charset('utf8');
	

	//$erg = $mysqli->query("INSERT INTO komments (kommentare) VALUES ('Hallo wie gehts denn so?')");
	$erg = $mysqli->query("select * from komments");

	//echo '<pre>';
	//print_r($alle_reihen);
	
		
		/*$alle_reihen = $erg->fetch_all(MYSQLI_ASSOC);
		foreach($alle_reihen as $reihe) { 
		    echo '<br>'; 
		    echo '<br>' . $reihe['kommentare'];
		}*/
	
	
		while ($reihe = $erg->fetch_assoc()) { 
            echo '<br>' . $reihe['kommentare']; 
		}

	
	$erg->free();
	$mysqli->close();
?>