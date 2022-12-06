<?php

$string = file_get_contents('dischi.json');
$list = json_decode($string, true);
$result = [];

//discIndex

if (empty($_GET['discIndex'])) {
  // non invio la richiesta del dettaglio quindi stampo tutti i dischi
  $result = $list;
} else {
  // altrimenti seleziono l'oggetto con l'indice arrivato in GET

  $result = $list[$_GET['discIndex']];
}


header('Content-type: application/json');
echo json_encode($result);


