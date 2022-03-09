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
                            <li><a href="index.html">Zone géograpique</a></li>
                            <li><a href="pages/activity.html">Secteur d'activité</a></li>
                            <li><a href="index.html">Taille d'entreprise</a></li>
                            <li><a href="index.html">Date de création</a></li>
                            <li><a href="index.html">Divers</a></li>
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
                    <div class="data-row" id="alt-per-year">
                        <img src="assets/arrondissements/alt_arr_2018.png" alt="">
                        <img src="assets/arrondissements/alt_arr_2019.png" alt="">
                        <img src="assets/arrondissements/alt_arr_2020.png" alt="">
                    </div>
                    <div class="data-row" id="alt-evo">
                        <img src="assets/arrondissements/alt_arr_evo.png" alt="">
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script src="js/main.js"></script>
</body>
</html>