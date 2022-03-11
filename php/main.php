<?php
    $bdd = new PDO("mysql:host=localhost;dbname=dashboard", "root", "");

    // "SELECT `Zone Géographique`, COUNT(`ALTERNANCES 2020`) FROM `bdd_stage` GROUP BY `Zone Géographique`  \n"
    // . "ORDER BY `COUNT(``ALTERNANCES 2020``)`  DESC;";

    $query = "SELECT `Zone Géographique`, COUNT(`ALTERNANCES 2020`) FROM `bdd_stage` GROUP BY `Zone Géographique`;";
    $request = $bdd->query($query);

    $geoZones = $request->fetchAll();
?>