<?php

$string = file_get_contents('dischi.json');

$list = json_decode($string, true);

// se ricevo in post questa variabile vuol dire che devo aggiungere un elemento all'array
if(isset($_POST['discoImg'])) {
  // creo l'elemento da aggiungere
  $disco = [
      "title" => "Smash",
      "author" => "The Offspring",
      "year" => 1994,
      "poster" => $_POST['discoImg'],
      "genre" => "Punk rock"
  ];
  //lo aggiungo alla lista
  $list[] = $disco;

  //salvo il nuovo array encodato in dischi.json
  file_put_contents('dischi.json', json_encode($list));
}


header('Content-type: application/json');
echo json_encode($list);


