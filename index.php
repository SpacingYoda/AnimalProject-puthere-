<?php
    include 'includes/newclass.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr"> 
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title></title>
    </head>
    <body>
    
    <div id="banner">
        something
    </div>

    <?php
        $animal = new Animal("Burchell's zebra","southern Africa",2);
        echo $animal->name;
        echo $animal->getArea();
        echo $animal->age;
    ?>

    <div class="gallery">
        <div>
            <a href="elephant.php">
                <img class="anipics" src="animalpics/Elephant.png" alt="Elephant">
            </a> 
        </div>

        <div>
            <a href="giraffe.php">
                <img class="anipics" src="animalpics/Giraffe.png" alt="Giraffe">
            </a> 
        </div>

        <div>
            <a href="rtrich.php">
                <img class="anipics" src="animalpics/Ostrich.png" alt="Ostrich">
            </a> 
        </div>

        <div>
            <a href="ringtailed.php">
                <img class="anipics" src="animalpics/Ringtailed.png" alt="Ringtailed">
            </a> 
        </div>

        <div>
            <a href="warthog.php">
                <img class="anipics" src="animalpics/Warthog.png" alt="Warthog">
            </a> 
        </div>

        <div>
            <a href="zebra.php">
                <img class="anipics" src="animalpics/Zebra.png" alt="Zebra">
            </a> 
        </div>
    </div>

    </body>
</html>