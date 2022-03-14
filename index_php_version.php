<?php
    include __DIR__ . '/./database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>

    <header class="d-flex align-items-center">
        <img src="./img/Spotify_Logo.png" alt="">
    </header>

    <main>
        <div class="container d-flex flex-wrap my-5">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
               <!-- <div class="col p-4">
                    <div class="card d-flex flex-column align-items-center">
                        <div class="img-card p-3">
                            <img class="img-fluid" src="https://www.onstageweb.com/wp-content/uploads/2018/09/bon-jovi-new-jersey.jpg" alt="">
                        </div>

                        <div class="info-card pb-2 text-center">
                            <h2 class="text-white pb-2">New Jersey</h2>
                            <div class="info-album">
                                <h3>Bon Jovi</h3>
                                <h3>1988</h3>
                            </div>

                        </div>
                    </div>
                </div> -->

                <?php
                    foreach($discs as $disc){
                        echo '<div class="col p-4">';
                            echo '<div class="card d-flex flex-column align-items-center">';
                                echo '<div class="img-card p-3">';
                                    echo '<img class="img-fluid" src='.$disc['poster']. 'alt="'.$disc['title']. '">';
                                echo '</div>';

                                echo '<div class="info-card pb-2 text-center">';
                                    echo '<h2 class="text-white pb-2">'. $disc['title'] .'</h2>';
                                    echo '<div class="info-album">';
                                        echo '<h3>'.$disc['author'].'</h3>';
                                        echo '<h3>'.$disc['year'].'</h3>';
                                    echo '</div>';   

                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                ?>

                
            </div>


            
            

            
            

        </div>

    </main>
    
</body>
</html>