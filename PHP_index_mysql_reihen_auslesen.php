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
		<p>
		Kommentare:  
		<?php
			$mysqli = new mysqli("localhost", "root","","test",3306);
			$erg = $mysqli->query("select * from kommentare");
	
			echo $erg->num_rows;
	
			$erg->free();
			$mysqli->close();
		?>
		</p>
		
    
	
	</form>

</body>

</html>