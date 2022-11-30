<?php

    require_once "Seeder.php";
    require_once "OST.php";
    require_once "Song.php";

    if(isset($_GET["ost-id"]) and $_GET["ost-id"] >= 0 and $_GET["ost-id"] <= 2) {
        echo json_encode(Seeder::getDummyData()[$_GET["ost-id"]]);
    } else {

        echo "{}";

        /*
        echo "<h1>Fehler</h1>";
        echo "<p>es ist leider ein Fehler aufgetreten</p>";
        echo "<img src='media/error.jpg' width='622' height='400'>";
        */
    }
