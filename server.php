<?php

/* mi codifica in un array associativo e invierà i dati come risposta  */
$songinfo = json_decode(file_get_contents('songinfo.json'), true);

header('Content-Type: application/json');

/* echo json_encode($songinfo); */