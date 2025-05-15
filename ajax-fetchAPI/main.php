<?php
header('Content-Type: application/json');


$apiUrl = "https://v2.jokeapi.dev/joke/Any?lang=pt";


$response = file_get_contents($apiUrl);

if ($response === FALSE) {
   
    echo json_encode(['error' => 'Não foi possível obter a piada']);
    exit;
}

echo $response;
?>