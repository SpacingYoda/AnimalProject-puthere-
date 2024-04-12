<?php
    include 'includes/newclass.php';
    include 'includes/pdo_db.php';
    //include 'includes/searching.php'; (failed)
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

        <form action="index.php" method="post">
            <input type="text" name="key" placeholder="Search for animals"/>
            <input type="submit" name="submit" value=">>" />
        </form>
        <div>
            <?php
//                if($rows!= 0){
//                    foreach($result as $r){
//                        echo'<h4>'.$r['gname'].' '.$r['sname'].'</h4>';
//                    }
//                }
            ?>
        </div>
        
    <div class="gallery">
        <div class="imgcontainer">
            <a href="elephant.php">
                <img class="anipics" src="animalpics/Elephant.png" alt="Elephant">
            </a>
            <div class="imgtext">
                <p> 
                    <?php
                        $animal = new Animal("Burchell's zebra","southern Africa",2);
                        echo $animal->gname;
                        echo $animal->getSname();
                        echo $animal->region;
                    ?> 
                </p>
            </div> 
        </div>

        <div class="imgcontainer">
            <a href="giraffe.php">
                <img class="anipics" src="animalpics/Giraffe.png" alt="Giraffe">
            </a>
            <div class="imgtext">
                <p> 
                    <?php
                        $animal = new Animal("Burchell's zebra","southern Africa",2);
                        echo $animal->gname;
                        echo $animal->getSname();
                        echo $animal->region;
                    ?> 
                </p>
            </div> 
        </div>

        <div class="imgcontainer">
            <a href="rtrich.php">
                <img class="anipics" src="animalpics/Ostrich.png" alt="Ostrich">
            </a>
            <div class="imgtext">
                <p> 
                    <?php
                        $animal = new Animal("Burchell's zebra","southern Africa",2);
                        echo $animal->gname;
                        echo $animal->getSname();
                        echo $animal->region;
                    ?> 
                </p>
            </div> 
        </div>

        <div class="imgcontainer">
            <a href="ringtailed.php">
                <img class="anipics" src="animalpics/Ringtailed.png" alt="Ringtailed">
            </a>
            <div class="imgtext">
                <p> 
                    <?php
                        $animal = new Animal("Burchell's zebra","southern Africa",2);
                        echo $animal->gname;
                        echo $animal->getSname();
                        echo $animal->region;
                    ?> 
                </p>
            </div> 
        </div>

        <div class="imgcontainer">
            <a href="warthog.php">
                <img class="anipics" src="animalpics/Warthog.png" alt="Warthog">
            </a>
            <div class="imgtext">
                <p> 
                    <?php
                        $animal = new Animal("Burchell's zebra","southern Africa",2);
                        echo $animal->gname;
                        echo $animal->getSname();
                        echo $animal->region;
                    ?> 
                </p>
            </div> 
        </div>

        <div class="imgcontainer">
            <a href="zebra.php">
                <img class="anipics" src="animalpics/Zebra.png" alt="Zebra">
            </a>
            <div class="imgtext">
                <p> 
                    <?php
                        $animal = new Animal("Burchell's zebra","southern Africa",2);
                        echo $animal->gname;
                        echo $animal->getSname();
                        echo $animal->region;
                    ?> 
                </p>
            </div> 
        </div>

        
    </div>

    <footer>
        <div>
            <p>More animals coming soon!</p>
        </div>
    </footer>

    </body>
</html>