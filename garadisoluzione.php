<!DOCTYPE html>
<html>
<head>
  <title>1° JCC Italia | L'innovativa coppa U18</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web|Bungee' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="main.css" id="theme">
  <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
<?php
// Recupero i valori inseriti nel form
$a = $_POST['a'];

// uso la funzione mail di PHP per inviare questi dati al mio indirizzo di posta
mail('vale18349276@gmail.com', 'Risposta gara di soluzione', $a);

// Mostro un messaggio di conferma all'utente
echo 'Al prossimo evento JCC';
?>
</body>
</html>
