<?php
require "dbconnection.php";
$dbcon = createDbConnection();


$sql= "INSERT INTO artists
        VALUES (1, Peppi)";



$Name = "Peppi";
$ID = "1";
$Album = "Rebal";
$Songs = "Here i am , Here i go";

// Create connection
$conn = new mysqli($Name, $ID, $Album, $Songs);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO artists (ArtistId, Name)
VALUES ('1', 'Peppi')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();















// $artist = "Name";
// $album = "Title"; 
// $ArtId = "ArtistId";

// $response=array();
// $response["Name"]="Peppi";
// $response["Title"]="Rebel";
// $response["ArtId"]="1";

// $responseJSON = json_encode($response);
// header('content-type: application/json');
// echo $responseJSON;