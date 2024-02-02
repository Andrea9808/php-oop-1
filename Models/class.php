<?php

 //Classe
 class Movie {

    // Proprietà della classe
   public $title;
   public $genre;
   public $year;
   public $image;


   // Costruttore della classe
   public function __construct($title, $genre, $year, $image){

       $this -> title = $title;
       $this -> genre = $genre;
       $this -> year = $year;
       $this->image = $image;

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

    // Metodo per ottenere l'URL dell'immagine del film
    public function getImage() {

        return $this->image;

    }


} 

?>