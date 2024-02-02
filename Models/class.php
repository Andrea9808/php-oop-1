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