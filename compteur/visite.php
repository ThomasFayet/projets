<?php
$monfichier = fopen('compteur.txt', 'r+'); 
$pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)
$pages_vues += 1; // On augmente de 1 ce nombre de pages vues
fseek($monfichier, 0); // On remet le curseur au début du fichier
fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
fclose($monfichier);
echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';

$adresseclient=$_SERVER['REMOTE_ADDR']."\n";
$navigateur=$_SERVER['HTTP_USER_AGENT']."\n";
$date=date('d/m/Y H:i')."\n";
$information = fopen('trace.txt', 'a');
fputs($information,$adresseclient);
fputs($information,$navigateur);
fputs($information,$date);
fclose($information);
?> 