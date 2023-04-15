<?php
require "dbconnection.php";
$dbcon = createDbConnection();

$playlist_id = 1;
$sql = "SELECT TrackId FROM playlist_track WHERE PlaylistId = $playlist_id";
$statement = $dbcon->prepare($sql);
$statement->execute();
$rows = $statement->fetchAll(PDO::FETCH_COLUMN,0);

foreach ($rows as $row){
    $track_id = $row;
    print_r($track_id);
}

$sql = "SELECT * FROM tracks WHERE TrackId = $track_id";
$statement = $dbcon->prepare($sql);
$statement->execute();

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row) {
    echo '<h2>'.$row["Name"].'<br>'.'</h2>'.'('.$row['Composer'].')'.'<br>';
}



