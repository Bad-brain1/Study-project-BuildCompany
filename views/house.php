<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/css/container.css">
    <link rel="stylesheet" href="../template/css/house.css">
    <title>Дома</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/" class="header__link">На главную</a>
            <h1 class="header__title"> Дома</h1>
            <a href="profile" class="header__link">Профиль</a>
        </div>
        <div class="card">
            <h2 class="card__title">Дом на заказ</h2>
            <div class="card__body body">
                <img src="../template/images/housebuild.jpg" class="body__img" width="250px" alt="">
                <div class="body__text">
                    <div class="text">
                        Если вам не подходят готовые решения.
                        Мы построим вам дом, который вы хотите только воспользуйтесь конструктором.
                    </div>
                    <a href="houseconstruct" class="text__link">Конструктор</a>
                </div>
            </div>
        </div>
        <? foreach ($arg as $houseItem) : ?>
            <div class="card">
                <h2 class="card__title"><? echo $houseItem['title']; ?></h2>
                <div class="card__body body">
                    <img src="<? echo $houseItem['img']; ?>" class="body__img" width="250px" alt="">
                    <div class="body__text">
                        <div class="text">
                            <? echo $houseItem['text']; ?>
                        </div>
                        <div class="text">
                            Цена: <? echo $houseItem['price']; ?>
                        </div>
                        <form action="horder" method="post">
                            <input type="hidden" name="id" value="<? echo $houseItem['id']; ?>">
                            <button type="submit" class="text__btn">Заказать</button>
                        </form>
                        
                        <!-- <a href="order" class="text__link">Заказать</a> -->
                    </div>
                </div>
            </div>
        <? endforeach; ?>
        <div class="footer">

        </div>
    </div>

</body>

</html>