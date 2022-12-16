<?php
// leggo il file dischi.json
$dischi = file_get_contents("dischi.json");
// decodifico il file dischi.json per visualizzare array e manipolarlo
$dischi = json_decode($dischi, true);
// var_dump($dischi);

// cambia la risposta dell'header da html a .json
header("content-Type: application/json");
// risposta al client decodificando il file .json
echo json_encode($dischi);