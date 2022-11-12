<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/css/container.css">
    <link rel="stylesheet" href="../template/css/designe.css">
    <title>Ремонт</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <a href="/" class="header__link">На главную</a>
            <h1 class="header__title"> Ремонт</h1>
            <a href="profile" class="header__link">Профиль</a>
        </div>
        <div class="card">
            <h2 class="card__title">Ремонт на заказ</h2>
            <div class="card__body body">
                <img src="../template/images/housebuild.jpg" class="body__img" width="250px" alt="">
                <div class="body__text">
                    <div class="text">
                        Если вам не подходят готовые решения.
                        Воспользуйтесь конструктором.
                    </div>
                    <a href="designeconstruct" class="text__link">Конструктор</a>
                </div>
            </div>
        </div>
        <? foreach ($arg as $listDesigne) : ?>
            <div class="card">
                <h2 class="card__title"><? echo $listDesigne['title']; ?></h2>
                <div class="card__body body">
                    <img src="<? echo $listDesigne['img']; ?>" class="body__img" width="250px" alt="">
                    <div class="body__text">
                        <div class="text">
                            <? echo $listDesigne['text']; ?>
                        </div>
                        <div class="text">
                            Цена: <? echo $listDesigne['price']; ?>
                        </div>
                        <form action="dorder" method="post">
                            <input type="hidden" name="id" value="<? echo $listDesigne['id']; ?>">
                            <button type="submit" class="text__btn">Заказать</button>
                        </form>
                        
                        <!-- <a href="order" class="text__link">Заказать</a> -->
                    </div>
                </div>
            </div>
        <? endforeach; ?>
<!-- TODO База данных. Вывод  -->
        <!-- <div class="footer">

        </div> -->
    </div>
</body>

</html>