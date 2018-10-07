++++++++++++++++++++++++++++++++++++++++++++++++++++
<?php

mail("xxxxx@xxxx.xx", "Betreff", "Message");

echo "<h1>Mail gesendet! :)</h1>"
?>

oder

<?php
	mail("xxxxx@xxxx.xx", "Zugriff", "Mein Webserver wird betreten! :/","From: Nicolas Sauter <xxxxx@xxxx.xx>");
?>
++++++++++++++++++++++++++++++++++++++++++++++++++++


PHP .ini
========

;Unglaublich aber alle 5 Syntaxen gehen!!! :))))
;sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
;sendmail_path =  C:\xampp\sendmail\sendmail.exe
;sendmail_path =  "C:\xampp\sendmail\sendmail.exe"
;sendmail_path = "C:/xampp/sendmail/sendmail.exe"
sendmail_path = C:/xampp/sendmail/sendmail.exe

; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize=20000M

; Maximum number of files that can be uploaded via a single request
max_file_uploads=200

max_execution_time=3600

max_input_time=3600

post_max_size=50000M


**********************************************************************************
**********************************************************************************

sendmail.ini
============

;Hier 5 Aenderungen zur 1ten in php.ini um Mail zu Schicken mit; mail()

#smtp_server=smtpauth.bluewin.ch
smtp_server=smtpauths.bluewin.ch

#smtp_port=587
smtp_port=465
#smtp_port=25

smtp_ssl=ssl

auth_username=xxxxxxxxx
auth_password=xxxxxxxxxxxx

force_sender=xxxxxxxxx@bluewin.ch

