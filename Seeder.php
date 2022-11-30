<?php

require_once "OST.php";
require_once "Song.php";

class Seeder
{
    /*
     * static is dafür da, dass wir nicht eine neue Instanz erzeugen müssen, sondern dass wir einfach seeder..getDummyData machen können.
     */
    public static function getDummyData() : array {


        $outputArr = [];

        $songArr = [];

        $songArr[0] = new Song(1, "Moonlight Sonata", "MadScientist", 3, 3.25);
        $songArr[1] = new Song(2, "Bound 2", "Ye", 2, 2.15);
        $songArr[2] = new Song(3, "Dark Fantasy", "Ye", 3, 2.35);
        $songArr[3] = new Song(4, "Come Down", "Anderson.Paak", 4, 2.40);

        $outputArr[0] = new OST(1, "Terraria OST", 2013, $songArr, "Terraria");


        $songArr[0] = new Song(1, "Moonlight Sonata", "MadScientist", 3, 3.25);
        $songArr[1] = new Song(2, "Bound 2", "Ye", 2, 2.15);
        $songArr[2] = new Song(3, "Dark Fantasy", "Ye", 3, 2.35);
        $songArr[3] = new Song(4, "Come Down", "Anderson.Paak", 4, 2.40);

        $outputArr[1] = new OST(2, "DOOM OST", 1999, $songArr, "DOOM");


        $songArr[0] = new Song(1, "Moonlight Sonata", "MadScientist", 3, 3.25);
        $songArr[1] = new Song(2, "Bound 2", "Ye", 2, 2.15);
        $songArr[2] = new Song(3, "Dark Fantasy", "Ye", 3, 2.35);
        $songArr[3] = new Song(4, "Come Down", "Anderson.Paak", 4, 2.40);

        $outputArr[2] = new OST(3, "LeagueOfLegends OST", 2006, $songArr, "LeagueOfLegends");

        return $outputArr;
   }



}