<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автоматическая система создания и ресайзов баннеров – GO-BANNER.RU</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <?php require "../blocks/openModal.php" ?>
    <?php require "../blocks/header.php" ?>

    <section class="content campaigns">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-4">
                <h1>МОИ КАМПАНИИ</h1>
            </div>
            
            <div class="col-lg-5 offset-3">
                <button type="submit" class="btn ">+ ДОБАВИТЬ КАМПАНИЮ</button>
            </div>
        </div>

        <div class="row grey camp">
            <div class="col-lg-3">
                <p>Наименование</p>
            </div>

            <div class="col-lg-3">
                <p>Количество баннеров</p>
            </div>

            <div class="col-lg-2">
                <p>Дата создания</p>
            </div>
        </div>

        <div class="row grey camp ots">
            <div class="col-lg-3 checkboxes">
                <p><input type="checkbox" name="a" value="Мои баннеры 02у">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Мои баннеры 02у</p>
                <p><input type="checkbox" name="a" value="Баннеры по прадажам">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Баннеры по прадажам</p>
                <p><input type="checkbox" name="a" value="Баннеры на НГ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Баннеры на НГ</p>
            </div>

            <div class="col-lg-3">
                <p>/</p>
                <p>12</p>
                <p>3</p>
            </div>

            <div class="col-lg-2">
                <p>09.01.2019</p>
                <p>12.12.2018</p>
                <p>26.07.2018</p>
            </div>

            <div class="col-lg-4">
                <button type="submit" class="btn ">СОЗДАТЬ РЕСАЙЗ</button>
                <button type="submit" class="btn create">СОЗДАТЬ БАННЕР</button>
                <button type="submit" class="btn ">СОЗДАТЬ РЕСАЙЗ</button>
                <button type="submit" class="btn create">СОЗДАТЬ БАННЕР</button>
                <button type="submit" class="btn ">СОЗДАТЬ РЕСАЙЗ</button>
                <button type="submit" class="btn create">СОЗДАТЬ БАННЕР</button>
            </div>
        </div>
    </div>
    </section>

    <?php require "../blocks/footer.php" ?>
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>