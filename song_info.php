<?php

    require_once "Seeder.php";
    require_once "OST.php";
    require_once "Song.php";

    header("Content-Type: application/json");

    if(isset($_GET["song-id"]) and $_GET["song-id"] >= 0 and $_GET["song-id"] <= 3) {
        echo json_encode(Seeder::getDummyData()[0]->getTracklist()[$_GET["song-id"]]);
    } else {

        echo "{}";

    }