<?php

    require_once "Seeder.php";
    require_once "OST.php";
    require_once "Song.php";

    if(isset($_GET["song-id"]) and $_GET["song-id"] >= 0 and $_GET["song-id"] <= 3) {
        echo json_encode(Seeder::getDummyData()[0]->getTracklist()[$_GET["song-id"]]);
    } else {

        echo "{}";

        /*
        echo "<h1>Fehler</h1>";
        echo "<p>es ist leider ein Fehler aufgetreten</p>";
        echo "<img src='media/error.jpg' width='622' height='400'>";
        */
    }

