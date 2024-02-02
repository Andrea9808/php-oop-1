

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Movies</title>

    <?php
        require_once __DIR__ . "/Models/class.php";
        require_once "db.php";
    ?>
</head>
<body>

    <div class="container">
        <div class="row">
            <?php
                // Ciclo per stampare le card dei film
                foreach ($movies as $movie) {
                    
                    echo '<div class="col-3">';   
                        echo '<div class="card mb-3">';
                            echo '<div class="card-body">';
                            
                                echo '<h5 class="card-title">' . $movie->getTitle() . '</h5>';
                                echo '<p class="card-text"><strong>Genere:</strong> ' . implode(', ', $movie->getGenre()) . '</p>';
                                echo '<p class="card-text"><strong>Anno:</strong> ' . $movie->year . '</p>';
                                echo "<img src='" . $movie->getImage() . "' alt='Poster del film'>";

                            echo '</div>';
                        echo '</div>'; 
                    echo '</div>'; 
                
                }
            ?>
        </div>
    </div>
    
</body>
</html>

<style>

    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    img{
        width: 100%;
        height: 250px;
    }

    .card {
        width: 18rem; 
        margin-bottom: 20px; 
        box-shadow:1px 4px 27px 6px;
    }

    .card-title {
        color:red; 
    }

    .card-text {
        color: #333; 
    }

</style>