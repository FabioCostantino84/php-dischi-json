<?php

/* mi codifica in un array associativo e invierà i dati come risposta  */
$json_songinfo = file_get_contents('songinfo.json');

header('Content-Type: application/json');

echo $json_songinfo;

/* assegno un percorso per evuitare il blocco di CORS */
// header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
// header("Access-Control-Allow-Headers: X-Requested-With");