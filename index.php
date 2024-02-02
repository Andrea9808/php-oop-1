<?php

    //Classe
    class movie {

         // Proprietà della classe
        public $title;
        public $genre;
        public $year;


        // Costruttore della classe
        public function __construct($title, $genre, $year){

            $this -> title = $title;
            $this -> genre = $genre;
            $this -> year = $year;

        }

        // Metodo per ottenere il genere del film
        public function getTitle(){

            return $this -> title;

        }

        //Metodo per inserire genere
        public function setGenre($genre){

            $this -> genre = $genre;

        }

        // Metodo per ottenere il genere del film
        public function getGenre(){

            return $this -> genre;
    
        }


    }   

    //Array di generi
    $genre1 = ["Avventura","Azione"];
    $genre2 = ["Avventura","Fantasy"];


    // Array di istanze
    $movies = array(

        new Movie("Indiana Jones", $genre1, "2000"),
        new Movie("Harry Potter", $genre2, "2001"),
        new Movie("Hunger Games", $genre1, "2011"),

    );

    //Ciclo per stampare i film
    foreach ($movies as $movie) {

        echo "Film: " . $movie->getTitle() . "<br>";
        echo "Genere: " .implode(', ', $movie->getGenre()) . "<br>";
        echo "Anno: " . $movie->year . "<br>";
        echo ".....................<br>";

    }
?>