<?php

$artist_id = 1;

header('content-type: application/json');
echo $json;


//Pyynnön runko
$body = file_get_contents("php://input");

$dataObje = json_decode($body);

echo $dataObje->Composer. " ".$dataObje->Name;

$users = json_decode($body);

foreach($users as $user){
    echo $user->username;
}