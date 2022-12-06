<?php

    require_once "Seeder.php";
    require_once "OST.php";
    require_once "Song.php";

    header("Content-Type: application/json");

    if(isset($_GET["ost-id"]) and $_GET["ost-id"] >= 0 and $_GET["ost-id"] <= 3) {
        echo json_encode(Seeder::getDummyData()[$_GET["ost-id"]]);
    } else {

        echo "{}";
    }