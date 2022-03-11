<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Secteur d'activité</title>
</head>
<body>
    <?php
        include "../php/main.php"
    ?>
    <section class="dashboard">
        <section class="header-area" id="header-area">
            <header>
                <div class="header-content">
                    <div class="header-brand">
                        <img src="../assets/icons/dashboard.png" alt="">
                        <h2>ALT Analytics</h2>
                    </div>
                    <nav class="header-nav">
                        <ul>
                            <li><a href="../index.php">Zone géograpique</a></li>
                            <li><a href="pages/activity.php">Secteur d'activité</a></li>
                            <li><a href="index.php">Taille d'entreprise</a></li>
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
                    <div class="number">
                        <?php
                            $altNum = array();
                            foreach ($geoZones as $geoRow) {
                                array_push($altNum, $geoRow[1]);
                            }

                            echo "
                            <ul>
                                <li><p>$altNum[1]</p></li>
                                <li><p>$altNum[2]</p></li>
                                <li><p>$altNum[3]</p></li>
                                <li><p>$altNum[4]</p></li>
                            </ul>"
                        ?>
                    </div>
                    
                </div>
            </section>
        </section>
    </section>
    <script src="js/main.js"></script>
</body>
</html>