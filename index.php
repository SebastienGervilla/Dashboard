<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Dashboard</title>
</head>
<body>
    <?php include "php/main.php"; ?>
    <section class="dashboard">
        <section class="header-area" id="header-area">
            <header>
                <div class="header-content">
                    <div class="header-brand">
                        <img src="assets/icons/dashboard.png" alt="">
                        <h2>ALT Analytics</h2>
                    </div>
                    <nav class="header-nav">
                        <ul>
                            <li><a href="index.php">Zone géograpique</a></li>
                            <li><a href="pages/activity.php">Secteur d'activité</a></li>
                            <li><a href="pages/size.php">Taille d'entreprise</a></li>
                            <li><a href="index.php">Date de création</a></li>
                            <li><a href="index.php">Divers</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
        </section>
        <section class="main-area">
            <section class="topbar-area">
                <div class="topbar-content">
                    <div class="options">
                        <ul>
                            <li><button id="first-button">Stage</button></li>
                            <li><button id="second-button">Alternance</button></li>
                            <li><button id="third-button">Tout</button></li>
                        </ul>
                    </div>
                    <div class="account">
                        <h3>Utilisateur</h3>
                        <button class="account-avatar"></button>
                    </div>
                </div>
            </section>
            <section class="data-area">
                <div class="data-content" id="data-content">
                <div class="bar-chart" id="geo-bar-chart">
                    <div id="geo-chart-slices">
                        <ul id="chart-slices-list">
                            <li></li>
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                    <ul>
                        <?php
                            echo 
                                "<li>
                                    <div class='name'>
                                    <p>Echelle : </p>
                                    </div>
                                    <div class='bar-chart-scale'>
                                        <p>0</p>
                                        <p>150</p>
                                        <p>300</p>
                                        <p>450</p>
                                        <p>600</p>
                                    </div>
                                </li>";
                            // $geoZones[1][1] = 3;
                            // array_push($geoZones, ["Paris", 25]);
                            foreach($geoZones as $geoRow) {
                                if ($geoRow[0] == "") {
                                    continue;
                                }
                                $geoName = $geoRow[0];
                                $altNum = $geoRow[1];
                                echo 
                                    "<li>
                                        <div class='name'>
                                            <p>$geoName</p>
                                        </div>
                                        <div class='bar-container'>
                                            <div class='bar'>$altNum</div>
                                        </div>
                                    </li>";
                            };
                        ?>
                    </ul>
                </div>
                </div>
            </section>
        </section>
    </section>
    <script src="js/main.js"></script>
    <script src="js/Charts.js"></script>
    <script type="text/javascript"> window.onload = setUpBarChart(); </script>
</body>
</html>