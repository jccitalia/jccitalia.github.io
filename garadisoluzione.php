<?php
// nome del file in cui inserire i testi
$file = "./rispostegds.txt";

// apre il file in modalità "append", se non esiste lo crea
$fp = fopen($file, "a");

// inserisce i valori ricevuti dal form in coda al file
fputs($fp, htmlspecialchars($_POST["a"]) . " " . htmlspecialchars($_POST["b"]) . "\r\n");

// chiude il file
fclose($fp);
?>
