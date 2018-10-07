https://www.php-kurs.com/

Die vier Haubtbefehle:
=================

$erg = $db-> query(
"SELECT * FROM kontakte"
);

$db->query(
"UPDATE kontakte SET erstellt='2016' WHERE id='2' LIMIT 1"
);

$db->query(
"DELETE FROM kontakte WHERE id='1' "
);

$erg->query( 
"INSERT INTO kontakte (vorname, nachname, anmerkung, erstellt) VALUES ('Axel', 'Maier', 'Mehr Infos zu Axel M.', NOW()); "
); 
