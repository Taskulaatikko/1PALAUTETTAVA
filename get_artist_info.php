<?php

require "dbconnection.php";
$dbcon = createDbConnection();

$sql = "SELECT Name FROM artists";
$statement = $dbcon->prepare($sql);
$statement->execute();


$artist_id = $statement->fetchAll(PDO::FETCH_ASSOC);

$json = json_encode($artist_id);
header('Content-type: application/json');
echo $json;


// $sql = "SELECT Name 
//         FROM artists 
//         WHERE artistId in
//             (SELECT artistId, Title
//             FROM albums
//             WHERE AlbumId IN
//                 (SELECT AlbumId
//                 FROM Tracks
//                 WHERE Name))";

















// $artists = $data[1];
// $artistinfo = $artists->Name;

// $albums = $data[1];
// $album = $albums->Title;

// $tracks = $data[1];
// $track = $tracks->Name;




// $fname = $_GET["Name"];
// $album = $_GET["albums"];
// $kappale = $_GET["Title"];
// $lista = $_GET["Tracks"];


// $response = array();
// $response = $fname;
// $response = $album;
// $response = $kappale;
// $response = $lista;


// $json = json_encode($allUsers);

// header('Content-type: application/json');
// echo $json;
