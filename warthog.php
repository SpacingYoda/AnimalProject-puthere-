<?php
    include 'includes/newclass.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        
        <title></title>
    </head>
    <body>
    
    <div id="banner">

        <img id="bannerpic" src="https://cms-cdn.zaonce.net/2019-10/icon-zoopedia.svg" alt="oopsie">
        <h1>Zoopedia</h1>

    </div>

    <div class="info-container">

        <?php
        $animal = new Animal("Plains Zebra","Equus quagga","southern Africa");
            echo $animal->gname;
            echo $animal->getSname();
            echo $animal->region;
        ?>

        <a href="index.php">
            <img class="solopics" src="animalpics/Warthog.png" alt="warthog">
        </a> 
    </div>

    </body>
</html>