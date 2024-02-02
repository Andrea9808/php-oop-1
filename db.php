<?php

    //Array di generi
    $genre1 = ["Avventura","Azione"];
    $genre2 = ["Avventura","Fantasy"];
    $genre3 = ["Horror","Thriller"];


    // Array di istanze
    $movies = array(

        new Movie("Indiana Jones", $genre1, "2000","https://tse3.mm.bing.net/th?id=OIP.9V8QvWHzlKvcxLSdwdht8gHaFC&pid=Api&P=0&h=180"),
        new Movie("Harry Potter", $genre2, "2001","https://tse3.mm.bing.net/th?id=OIP.Quti2pazlZhLhjItWalgHgHaEK&pid=Api&P=0&h=180"),
        new Movie("Hunger Games", $genre1, "2011","https://tse2.explicit.bing.net/th?id=OIP.zwlVEvKNnNCYCxggCfTqEgHaLH&pid=Api&P=0&h=180"),
        new Movie("IT remake", $genre3, "2021", "https://tse3.mm.bing.net/th?id=OIP.vh4IOSwyh5KMtu1Xe2E8sAHaE8&pid=Api&P=0&h=180"),
    );

?>