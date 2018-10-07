<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
	

<head>
    <link rel="stylesheet" href="css/index.css" type="text/css" />
</head>

<body>
    <hr>
	<a href="https://heliosrouter.internet-box.ch">Sichere Verbindung (https)</a>
	
	<hr>
	
	<form action="cgi_upload/cgi_upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="datei[]" multiple>
        <br />
        <input type="submit" value="Hochladen">
    </form>
    
	<a href="upload">Upload Ordner</a>
	
	<hr>
	
	<a href="http://testhost1">testhost1</a>
	<a href="http://testhost2">testhost2</a>
	<a href="http://testhost3">testhost3</a>
	
	<?php
		mail("xxxxx@xxxxx.xx", "Zugriff", "Mein Webserver wird betreten! :/","From: Nicolas Sauter <xxxxx@xxxxx.xx>");
	?>
	</body>

</html>
