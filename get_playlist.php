<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$playlist_id = 1;
$sql = "SELECT TrackId FROM playlist_track WHERE PlaylistId = $playlist_id";
$statement = $dbcon->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_COLUMN);

foreach ($rows as $row){
    $track_id = $row;
}

$sql = "SELECT * FROM tracks";
$statement = $dbcon->prepare($sql);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    echo '<h2>'.$row["Name"].'<br>'.'</h2>'.''.$row['Composer'].''.'<br>';
 
}


