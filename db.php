<?php

//Array di generi
$genre1 = ["Avventura","Azione"];
$genre2 = ["Avventura","Fantasy"];


// Array di istanze
$movies = array(

    new Movie("Indiana Jones", $genre1, "2000"),
    new Movie("Harry Potter", $genre2, "2001"),
    new Movie("Hunger Games", $genre1, "2011"),

);