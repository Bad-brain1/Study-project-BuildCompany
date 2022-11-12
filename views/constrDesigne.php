<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../template/css/container.css"> -->
    <link rel="stylesheet" href="../template/css/constHouse.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Конструктор</title>
</head>

<body class="bg-light">
    <div class="container">
        <div class="header">
            <a href="designe" class="header__link">Назад</a>
            <h1 class="header__title"> Конструктор Ремонта</h1>
            <a href="profile" class="header__link">Профиль</a>
        </div>
        <form action="cdorder" method="post" class="form shadow-sm p-3 mb-5 bg-body rounded">
            <label for="seltwo" class="form-label">Стиль</label>
            <select id="seltwo" name="style" class="form-select" aria-label="Default select example">
                <option selected>Стиль</option>
                <option value="Минимализм">Минимализм </option>
                <option value="Лофт">Лофт</option>
                <option value="Бароко">Бароко</option>
                <option value="Комбинированый">Комбинированый</option>
                <option value="Другое">Другое</option>
            </select>
            <div class="input-group input-group-sm mt-2">
                <span class="input-group-text" id="inputGroup-sizing-sm">кв.м</span>
                <input type="text" name="square" value="10" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            
            <div class="input-group input-group-sm mt-2">
                <span class="input-group-text" id="inputGroup-sizing-sm">Кол-во комнат для ремонта</span>
                <input type="text" name="room" id="room" value="1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            
            <button type="submit" class="btn btn-success mt-2">Заказать</button>
            <div class="alert alert-dark mt-2" role="alert">
                Цена составляется после осмотра объекта.
                Менаджер свяжется с вами для уточнения всех деталей.
            </div>
        </form>
    </div>
</body>

</html>