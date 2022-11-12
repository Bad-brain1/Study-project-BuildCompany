<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../template/css/container.css">
    <link rel="stylesheet" href="../template/css/auth.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Регистрация</title>
</head>

<body class="bg-light text-dark">
    <div class="container">
        <div class="main">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="auth">Вход</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="registration">Регистрация</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">На главную</a>
                </li>
            </ul>

            <form action="" method="post">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" id="formGroupExampleInput">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Пароль</label>
                    <input type="text" name="pass" class="form-control" id="formGroupExampleInput2">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Повтор пароля</label>
                    <input type="password" name="contpass" class="form-control" id="formGroupExampleInput2">
                </div>

                <button type="submit" class="btn btn-outline-dark">Регистрация</button>

            </form>
            <?php
            if ($_SESSION['message']) {
                echo $_SESSION['message'];
            }
            unset($_SESSION['message']);
            ?>
        </div>

    </div>
</body>

</html>