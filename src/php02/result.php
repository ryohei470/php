<?php

require_once('functions/search_city_time.php');
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>
</body>
<main>
    <div class="result__content">
        <div class="result-cards">
            <div class="result-card">
                <div class="result-card__img-wrapper">
                    <img class="result-card__img" src="img/<?= $city['img'] ?>" alt="<?= $city['name'] ?>">
                </div>
                <div class="result-card__body">
                    <p class="result-card__city"></p>
                    <p class="result-card__time"></p>
                </div>
            </div>
            <div class="result-card">
                <div class="result-card__img-wrapper">
                    <img class="result-card__img" src="img/japan.jpg" alt="国旗">
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>