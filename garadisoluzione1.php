<?php
// Recupero i valori inseriti nel form
$a = $_POST['a'];

// uso la funzione mail di PHP per inviare questi dati al mio indirizzo di posta
mail('vale18349276@gmail.com', 'Risposta gara di soluzione', $a);

// Mostro un messaggio di conferma all'utente
echo 'Al prossimo evento JCC';
?>
