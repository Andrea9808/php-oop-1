<?php

    class movie {

        public $title;
        public $genre;


        public function __construct($title, $genre){

            $this -> title = $title;
            $this -> genre = $genre;

        }

        public function getTitle(){

            return $this -> title;

        }

    }   

    $movie1 = new movie("Indiana Jones","Avventura");
    $movie2 = new movie("Harry Potter","Fantasy");

    echo("Film: " . ($movie1 -> getTitle()));
    echo "<br>";
    echo("Genere: " . ($movie1 -> genre));

    echo "<br>.....................<br>";

    echo("Film: " . ($movie2 -> getTitle()));
    echo "<br>";
    echo("Genere: " . ($movie2 -> genre));
?>