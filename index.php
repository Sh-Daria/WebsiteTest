<!DOCTYPE html>
<html>
<head>
    <title>Регистрация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <img src="img\img1.jpg" alt="" width="110" height="57">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Регистрация</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Профиль</a></li>
        </ul>
    </header>
</div>
<div class="container">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'GET') { ?>

        <form action="form.php" method="post">
            <h3 style="text-align: center">Введите следующую информацию: </h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Имя</label>
                <input type="text" class="form-control" name="firstname" id="exampleFormControlInput1" value="<?php echo $_POST['firstname'] ?? '' ?>" placeholder="Имя">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Фамилия</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput2" value="<?php echo $_POST['lastname'] ?? '' ?>" placeholder="Фамилия">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Почта</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput3" value="<?php echo $_POST['mail'] ?? '' ?>" placeholder="mail">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Пароль</label>
                <input type="text" class="form-control" name="lastname" id="exampleFormControlInput4" value="<?php echo $_POST['password'] ?? '' ?>" placeholder="*****">
            </div>

            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Сохранить данные">
                <img src="img\img2.png" style="float: right" width="450" height="290">
            </div>
        </form>
        <?php
    }
    ?>
</div>

<div class="container">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo '<b>firstname</b> = ' . ($_POST['firstname'] ?? '') . '<br>';
        echo 'lastname = ' . ($_POST['lastname'] ?? '');
        echo 'mail = ' . ($_POST['mail'] ?? '');
        echo 'password = ' . ($_POST['password'] ?? '');
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>