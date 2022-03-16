<?php
    $bdd = new PDO("mysql:host=localhost;dbname=dashboard", "root", "");

    // "SELECT `Zone Géographique`, COUNT(`ALTERNANCES 2020`) FROM `bdd_stage` GROUP BY `Zone Géographique`  \n"
    // . "ORDER BY `COUNT(``ALTERNANCES 2020``)`  DESC;";

    $geoQuery = "SELECT `Zone Géographique`, COUNT(`ALTERNANCES 2020`) FROM `bdd_stage` GROUP BY `Zone Géographique`;";
    $geoRequest = $bdd->query($geoQuery);

    $actQuery = "SELECT `Secteur Activité`, COUNT(`ALTERNANCES 2020`) FROM `bdd_stage` GROUP BY `Secteur Activité`;";
    $actRequest = $bdd->query($actQuery);

    $sizeQuery = "SELECT `Taille de la structure`, COUNT(`ALTERNANCES 2020`) FROM `bdd_stage` GROUP BY `Taille de la structure`;";
    $sizeRequest = $bdd->query($sizeQuery);

    $geoZones = $geoRequest->fetchAll();
    $activities = $actRequest->fetchAll();
    $sizes = $sizeRequest->fetchAll();
?>