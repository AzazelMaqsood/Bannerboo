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

    <section class="create-banner-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>СОЗДАТЬ БАННЕР</h1>
                    <p>1. Выберите формат баннера</p>
                </div>
                <div class="col-lg-12"><hr></div>
            </div>

            <div class="row">
                <div class="col-lg-2">
                    <input id="HTML5" type="radio" value="HTML5" name="format">
                    <label for="HTML5">HTML 5</label>
                </div>
                <div class="col-lg-2">
                    <input id="GIF" type="radio" value="GIF" name="format">
                    <label for="GIF">GIF</label>
                </div>
                <div class="col-lg-2">
                    <input id="PNG" type="radio" checked value="PNG" name="format">
                    <label for="PNG">PNG</label>
                </div>
                <div class="col-lg-2">
                    <input id="JPG" type="radio" value="JPG" name="format">
                    <label for="JPG">JPG</label>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>2. Выберите размеры</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="choose-size grey">
                        <img src="../img/arrow_left.png" alt="arrow_left" class="arrow1">
                        <img src="../img/970х90_slider.png" alt="" class="size-slider">
                        <img src="../img/728х90_slider.png" alt="" class="size-slider">
                        <img src="../img/300х250_slider.png" alt="" class="size-slider">
                        <img src="../img/120x600_slider.png" alt="" class="size-slider">
                        <img src="../img/250x250_slider.png" alt="" class="size-slider">
                        <img src="../img/arrow_right.png" alt="arrow_right" class="arrow2">
                    </div>
                </div>
            </div>

            <br>

            <div class="grey size-banner">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center">
                            <p>Ширина</p>
                            <input type="width" size="1">
                    </div>

                    <div class="col-lg-8">
                        <div id="rectangle"></div>
                    </div>

                    <div class="banner-height">
                        <div class="col-lg-2 d-flex justify-content-center">
                            <p>Высота</p>
                            <input type="width" size="1">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="choose-size grey">
                            <button type="submit" class="btn">СОХРАНИТЬ</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hint">
                <div class="row">
                        <div class="col-lg-12">
                            <p>Вы также можете создавать баннеры из <a href="">готовых шаблонов</a></p>
                        </div>
                    </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>3. Выберите рекламную площадку</p>
                </div>
                <div class="col-lg-12"><hr></div>
            </div>

            <div class="advertising">
                <div class="row">
                    <div class="col-lg-2">
                        <input id="Google AdWords" type="radio" value="Google AdWords" name="advertising">
                        <img src="../img/googleads.png" alt="">
                    </div>
                    <div class="col-lg-2">
                        <input id="Yandex.Direct" type="radio" value="Yandex.Direct" name="advertising">
                        <img src="../img/yandexdirect.png" alt="">
                    </div>
                    <div class="col-lg-2">
                        <input id="MyTarget" type="radio" checked value="MyTarget" name="advertising">
                        <img src="../img/mytarget.png" alt="">
                    </div>
                    <div class="col-lg-3">
                        <input id="other" type="radio" value="other" name="advertising">
                        <a href="">Загрузите свои ТТХ</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2">
                        <label for="Google AdWords">Google AdWords</label>
                    </div>
                    <div class="col-lg-2">
                        <label for="Yandex.Direct">Yandex.Direct</label>
                    </div>
                    <div class="col-lg-2">
                        <label for="MyTarget">MyTarget</label>
                    </div>
                    <div class="col-lg-2">
                        <label for="other"> Другое</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>4. Загрузка файлов для работы</p>
                </div>
                <div class="col-lg-12"><hr></div>
            </div>


            <div class="configuration">
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <p>Шрифты</p>
                        <input type="file" id="upload_fonts" name="upload_fonts" accept=".EOT, .WOFF, .WOFF2, .TTF, .SVG" >

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <p>Логотип в векторе</p>
                        <input type="file" id="upload_logo" name="upload_fonts" accept=".EPS, .PDF, .AI, .CDR, .JPG, .PNG, .GIF, .PSD, .SVG, .SWF, .WMF, .CMX">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <p>Исходный креатив</p>
                        <input type="file" id="upload_creative" name="upload_fonts" accept="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <p>Мастер баннер для ресайза или шаблон</p>
                        <input type="file" id="upload_banner" name="upload_fonts" accept="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 d-flex">
                        <p>Доп.материал (до 20 мб*)</p>
                        <input type="file" id="upload_material" name="upload_fonts" accept="">
                    </div>
                </div>

                <div id="openPreLoader" class="PreLoader">
                    <div>
                        <a href="#close" title="Закрыть" class="close">x</a>
                        
                        <h1>ЗАГРУЗКА ФАЙЛОВ ДЛЯ РАБОТЫ, <br> 
                                СЕРВИС УСЕРДНО РАБОТАЕТ</h1>

                        <img src="../img/preloader.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 d-flex justify-content-end">
                    <button type="submit" class="btnCancel">ОТМЕНИТЬ</button>
                </div>
                
                <div class="col-lg-4 d-flex justify-content-end">
                    <a href="../send_banner.php"><button type="submit" class="btnRun">ЗАПУСТИТЬ</button></a>
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