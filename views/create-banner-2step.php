<?php require "../db.php" ?>
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

    <section class="choose-result-content">
        <div class="container">
            <form action="../send_banner2" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>ВЫБЕРИТЕ РУЗЛЬТАТ</h1>  
                    </div>
                </div>

                <div class="hint">
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Выберите отображение результатов и модерации</p>
                        </div>
                        <div class="col-lg-12"><hr></div>
                        <div class="col-lg-12">
                            <input id="fbf" type="radio" value="Покадровый, без анимации" name="result">
                            <label for="fbf">Покадровый, без анимации (~ 30 мин)</label>
                        </div>
                        <div class="col-lg-10">
                            <img src="../img/fbf.png" alt="" class="bunny img-fluid">
                        </div>
                        <div class="col-lg-2">
                            <p class="ins"> - без верстки</p>
                            <p class="ins"> - без анимации</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <input id="auto" type="radio" value="Верстка анимации (авто режим)" name="result">
                            <label for="auto">Верстка анимации (авто режим) (~ 45 мин)</label>
                        </div>
                        <div class="col-lg-5">
                            <img src="../img/auto.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <p class="ins"> - анимация</p>
                            <p class="ins"> - авторежим</p>
                            <p class="ins"> - без правок</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <input id="manual" type="radio" value="Верстка с ручной модерацией" name="result">
                            <label for="manual">Верстка с ручной модерацией (~ 50 мин)</label>
                        </div>
                        <div class="col-lg-5">
                            <img src="../img/manualmoderation.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-7">
                            <p class="ins"> - анимация</p>
                            <p class="ins"> - авторежим</p>
                            <p class="ins"> - правки</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col"></div>
                        <div class="col-lg-4 justify-content-end">
                            <button type="submit" class="btnSend">ОТПРАВИТЬ НА ВЕРСТКУ</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php require "../blocks/footer.php" ?>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>