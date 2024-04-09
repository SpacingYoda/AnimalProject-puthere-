<?php
    include 'includes/newclass.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

    <?php
        $animal = new Animal("Burchell's zebra","southern Africa",3);
        echo $animal->name;
        echo $animal->getArea();
        echo $animal->age;

    ?>

    </body>
</html>