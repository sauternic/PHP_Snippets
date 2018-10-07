Kann mehrer Files gleichzeitig Hochladen!! :))))

//HTML

<form action="cgi_upload/cgi_upload.php" method="post" enctype="multipart/form-data">
   <input type="file" name="datei[]" multiple>
   <br />
   <input type="submit" value="Hochladen">
</form>

************************************************************************************************************

//PHP auf Server(action="cgi_upload.php")

<?php
  
    for($i = 0; $i < count($_FILES['datei']['name']); $i++)
    {
        move_uploaded_file($_FILES['datei']['tmp_name'][$i], "G:\\A_Uploads\\".$_FILES['datei']['name'][$i]);  
    }

echo count($_FILES['datei']['name']);
?>

<h1>Hochgeladen! :))))))</h1>
