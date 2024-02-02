<?php

    require "db.php";
    require_once __DIR__ . "/Models/class.php";

    
    //Ciclo per stampare i film
    foreach ($movies as $movie) {

        echo "Film: " . $movie->getTitle() . "<br>";
        echo "Genere: " .implode(', ', $movie->getGenre()) . "<br>";
        echo "Anno: " . $movie->year . "<br>";
        echo ".....................<br>";

    }
?>