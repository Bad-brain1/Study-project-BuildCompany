<?
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/css/container.css">
    <link rel="stylesheet" href="../template/css/profile.css">
    <title>Профиль</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/" class="header__link">На главную</a>
            <h1 class="header__title"> Профиль</h1>
            <a href="logout" class="header__link">Выход</a>
        </div>
        <div class="user">
            <h2 class="user__title subtitle">Информация</h2>
            <div class="user__info">Электронная почта: <?= $_SESSION['user']['email'] ?></div>
            <div class="user__info">Телефон: 7987666111</div>
        </div>
        <h2 class="order__titel subtitle"> Заказы</h2>
        <? foreach ($arg4 as $orderItem) : ?>
            <div class="card">
                <h2 class='card__title subtitle'><? echo $orderItem['title']; ?></h2>
                <div class="card__body">
                    <div class=""><? echo $orderItem['text']; ?></div>
                </div>

            </div>
        <? endforeach; ?>
        <div class="order">

            <div class="">
                <? foreach ($arg3 as $orderItem) : ?>
                    <div class="card">
                        <h2 class='card__title subtitle'><? echo $orderItem['title']; ?></h2>
                        <div class="card__body">
                            <img src="<? echo $orderItem['img']; ?>" class='card__img' width="200px" alt="">
                            <div class=""><? echo $orderItem['text']; ?></div>
                        </div>

                    </div>
                <? endforeach; ?>
                <? foreach ($arg as $orderItem) : ?>
                    <div class="card">
                        <h2 class='card__title subtitle'><? echo $orderItem['title']; ?></h2>
                        <div class="card__body">
                            <img src="<? echo $orderItem['img']; ?>" class='card__img' width="200px" alt="">
                            <div class=""><? echo $orderItem['text']; ?></div>
                        </div>

                    </div>
                <? endforeach; ?>
            </div>
            <div class="">
                <? foreach ($arg2 as $orderItem) : ?>
                    <div class="card">
                        <h2 class='card__title subtitle'><? echo $orderItem['title']; ?></h2>
                        <div class="card__body">
                            <img src="<? echo $orderItem['img']; ?>" class='card__img' width="200px" alt="">
                            <div class=""><? echo $orderItem['text']; ?></div>
                        </div>

                    </div>
                <? endforeach; ?>
                <? foreach ($arg1 as $listDesigne) : ?>
                    <div class="card">
                        <h2 class='card__title subtitle'><? echo $listDesigne['title']; ?></h2>
                        <div class="card__body">
                            <img src="<? echo $listDesigne['img']; ?>" class='card__img' width="200px" alt="">
                            <div class=""><? echo $listDesigne['text']; ?></div>
                        </div>

                    </div>
                <? endforeach; ?>
            </div>

        </div>
    </div>
</body>

</html>