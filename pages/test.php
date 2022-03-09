<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include "../php/main.php";

    foreach ($geoZones as $geoZone) {
        echo "$geoZone[0] : $geoZone[1] <br>";
    }

    ?>
</body>
</html>