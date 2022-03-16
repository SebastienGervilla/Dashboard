<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Taille de l'entreprise</title>
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
                            <li><a href="activity.php">Secteur d'activité</a></li>
                            <li><a href="size.php">Taille d'entreprise</a></li>
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
                            $sizeNums = array();
                            $sizeNames = array();
                            foreach ($sizes as $sizeRow) {
                                if ($sizeRow[0] == "") {
                                    continue;
                                }
                                $string = $sizeRow[0][1];
                                if (strpos($sizeRow[0], ",") == true) {
                                    $cut_string = '';
                                    for ($i=0; $i < strlen($sizeRow[0]); $i++) {
                                        $letter = $sizeRow[0][$i];
                                        if ($letter == ",") {
                                            break;
                                        }
                                        $cut_string = $cut_string . $letter;
                                    }
                                    array_push($sizeNames, $cut_string);
                                } else {
                                    array_push($sizeNames, $sizeRow[0]);
                                }
                                array_push($sizeNums, $sizeRow[1]);
                            }

                            echo "
                            <ul>
                                <div class='top-act'>
                                    <li><p>$sizeNames[0]<br>$sizeNums[0]</p></li>
                                    <li><p>$sizeNames[1]<br>$sizeNums[1]</p></li>
                                    <li><p>$sizeNames[2]<br>$sizeNums[2]</p></li>
                                    <li><p>$sizeNames[3]<br>$sizeNums[3]</p></li>
                                </div>
                            </ul>"
                        ?>
                    </div>
                    <div class="size-chart">
                        <canvas id="size-chart"></canvas>
                    </div>
                </div>
            </section>
        </section>
    </section>
    <script 
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" 
        integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer">
    </script>
    <script src="../js/Charts.js"></script>
    <?php
        include '../php/functions.php';

        $sizeNames = transformToList($sizeNames);
        $sizeNums = transformToList($sizeNums);

        echo 
        "<script type='text/javascript'>

            let size_names = [$sizeNames];
            let size_nums = [$sizeNums];

            let color_set = ['#FF9600', '#FF3737', '#1964FF', '#FFFF37']

            prepareChart('size-chart', 'pie', color_set, size_names, size_nums);
        </script>";
    ?>
    <script src="../js/main.js"></script>
</body>
</html>