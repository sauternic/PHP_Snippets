///////////////////////////////action.php/////////////////////////////////////////////////////////////////

<<?php
	$mysqli = new mysqli("localhost", "root","","test",3306);
	$mysqli->set_charset('utf8');
	
	$text =  $_POST['textarea1'];
	
	//mysqli_real_escape_string($mysqli, $text) hat 2 Parameter!
	//$text = mysqli_real_escape_string($mysqli, $text);
	
	//Objektorientiert nur 1ner!!
	$text = $mysqli->real_escape_string($text);
	
	
	$erg = $mysqli->query( "INSERT INTO kommentare (text) VALUES ('$text')" );
	
	if($erg){
        echo "<h1>Meldung Abgeschickt und Eingetragen!:)<h1>";
	} else {
        echo "<h1>Hat nicht geklappt! :(<h1>";
	}

	
	$mysqli->close();
?>

/////////////////////////////////ende//////////////////////////////////////////////////////////////////////


////////////////////////////////HTML-Teil -> index.html////////////////////////////////////////////////////

<!doctype html>

<head>
    <meta charset="UTF-8">
    <title>Kommentare</title>
    <style>
    textarea{
        width: 500px;
        height: 300px;
    }
    </style>

    <script>

    </script>
</head>

<body>
    <form action="action.php" method="POST" enctype="multipart/form-data">
        <textarea name="textarea1"></textarea>
        <br>
        <input type="submit" value="abschicken">
    </form>

</body>

</html>
///////////////////////////////ende/////////////////////////////////////////////////////////////////////////