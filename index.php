<?php 
require "./db.php";
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автоматическая система создания и ресайзов баннеров – GO-BANNER.RU</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <?php require "./blocks/openModalMain.php" ?>
    <div class="main-page">
    <header class="header" id="header">
        <div class="container">
            <div class="row">   
                <div class="col-lg-5 d-flex">
                    <img src="img/logo.png" alt="logo">
                    <p class="logo-text">Онлайн-конструктор <br>
                        HTML5 баннеров</p>
                </div>

                <div class="col-lg-7">
                    <nav>
                        <ul class="menu d-flex justify-content-end">
                                <li class="dropdown menu__item">
                                  <a href="#" class="" data-toggle="dropdown">Создать баннер</a>
                                  <ul class="dropdown-menu">
                                    <li><a href="./views/create-banner.php">Создать баннер</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Создать ресайз</a></li>
                                    <li><a href="./views/campaigns.php">Мои кампании</a></li>
                                  </ul>
                                </li>
                            <li class="menu__item">
                                <a href="./views/blog.php">
                                    Блог
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#">
                                    Тарифы
                                </a>
                            </li>
                            <li class="menu__item">
                                <a href="#">
                                    Контакты
                                </a>
                            </li>

                            <li class="menu__item">
                                <a href="#">
                                    <?php if( isset($_SESSION['logged_user'])) :?>
                                    
                                    <a href="./logout.php"><button class="btn-login">Выйти</button></a>

                                    <?php else : ?>
                                    <a href="#openModal"><button class="btn-login">Войти</button></a>
                                    <?php endif; ?>
                                </a>
                            </li>

                            
                            
                        </ul>
                    </nav>
                </div>

                <div class="col-lg-6">
                    <div class="offer">
                        <h1 class="offer__title">
                            АВТОМАТИЧЕСКАЯ СИСТЕМА
                             СОЗДАНИЯ И РЕСАЙЗОВ БАННЕРОВ
                        </h1>
                    </div>
                    <div class="offer__intro ">
                        <p>
                            Создавайте продающие баннеры используя онлайн-систему <br> Go Banner.
                        </p>
                    </div>
                    <div class="offer_text">
                        <p>
                            Работа с нами упростит ваш труд и сэкономит драгоценное время!
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 ml-auto">

                </div>

            </div>
            <div class="row">
                <div class="col-lg-2">
                    <button class="btn-more">
                        ПОДРОБНЕЕ
                    </button>
                </div>
            </div>
        </div>
    </header>

    <section class="features" id="features">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        СОЗДАВАЙТЕ БАННЕРЫ НЕ БЕСПОКОЯСЬ НИ О ЧЕМ!
                    </h1>
                    <h3>
                        Изготовление качественных баннеров для всех платформ за полчаса
                    </h3>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 d-flex">
                        <img src="./img/L0001.png" alt="first-icon">
                        <div class="1block">
                        <h2>
                            ВАМ НЕ НУЖНЫ ОСОБЫЕ ЗНАНИЯ
                        </h2>
                        <p>
                            Выберите подходящий для вас дизайн, и реализуйте свои самые смелые идеи не беспокоясь о настройках. Система сделает все за вас!  
                        </p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <img src="./img/L0002.png" alt="second-icon">
                        <div class="2block">
                        <h2>
                            ЭКОНОМЬТЕ СВОЕ ВРЕМЯ
                        </h2>
                        <p>
                            Наша система автоматизации позволяет создавать баннеры в сжатые сроки!
                        </p>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <img src="./img/L0003.png" alt="fird-icon">
                        <div class="3block">
                        <h2>
                            HTML5 / JAVASCRIPT / CSS
                        </h2>
                        <p>
                            Идеально оптимизирован под Mac OS / PC
                        </p>
                        <!--
                            <h2>
                            HTML5 / JAVASCRIPT / <br> CSS
                        </h2>
                        <p style="white-space: nowrap;">
                            Идеально оптимизирован <br> под Mac OS / PC
                        </p>
                        -->
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex">
                        <img src="./img/scheme.png" alt="fourth-icon">
                        <div class="4block">
                        <h2>
                            ТЕХНОЛОГИЯ НЕЙРОСЕТЕЙ
                        </h2>
                        <p>
                            Создавайте до 1000 баннеров одновременно!
                        </p>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    </div>
    <section class="first-call" id="first-call">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn-1call">
                        СОЗДАТЬ БАННЕР
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="dev-info" id="dev-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        ПРОИЗВОДСТВО БАННЕРОВ ДЛЯ РЕКЛАМНЫХ СЕТЕЙ И ПЛОЩАДОК
                    </h1>
                    <h2>
                        Go Banner – создан специально для рекламы!
                    </h2>
                    <p class="block-dev-info">
                        Благодаря собственной нейросети, автоматизированная система Go Banner <br> создает баннеры не только в HTML5, но и в таких форматах как: PNG, GIF, JPEG! 
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-3">
                    <img src="./img/L0004.png" alt="" class="">
                    <p>
                        руководствуйтесь подсказкам
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="./img/L0005.png" alt="">
                    <p>
                        используйте готовые <br> макеты 
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="./img/L0006.png" alt="">
                    <p>
                        делайте свои баннера адаптивными
                    </p>
                </div>
                <div class="col-lg-3">
                    <img src="./img/L0007.png" alt="">
                    <p>
                        загружайте свои собственные наработки 
                    </p>
                </div>    
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                    <p class="block-dev-info">
                        Go Banner выполнит ваши задачи самостоятельно и без лишних для пользователя инструментов, что идеально подойдет как новичкам, так и профессионалам, которые ценят свое время и деньги!
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="second-call" id="second-call">
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                            <button class="btn-2call">
                                СОЗДАТЬ БАННЕР
                            </button>
                        </div>
                    </div>
        </div>
    </section>

    <div class="hh2">
    <section class="opportunities" id="opportunities">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Возможности Go Banner
                    </h1>
                    
                    <p class="opp-p">
                        Автоматическое создание адаптивных баннеров, <br> подстраиваемых в зависимости от выбранного вами ресурса 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-11 col-lg-4 left first">
                    <p>
                        Ресайз HTML5 баннеров <br> используя готовые мастер баннер
                    </p>
                </div>

                <div class="col-4 col-lg-4 offset-4 right second">
                    <p>
                        Адаптация под любые технические требования
                    </p>
                </div>

                <div class="col-lg-4 left third">
                    <p>
                        Оптимизация баннеров под требованиям GDN
                    </p>
                </div>

                <div class="col-lg-4 offset-4 right fourth">
                    <p>
                        Возможность работы на разных ПК
                    </p>
                </div>

                <div class="col-lg-4 left fifth">
                    <p>
                        Возможность использования Google Fonts
                    </p>
                </div>

                <div class="col-lg-4 offset-4 right sixth">
                    <p>
                        Одновременная выгрузка до 1000 готовых баннеров 
                    </p>
                </div>

                <div class="col-lg-4 left seventh">
                    <p>
                        Выделенный аккаунт менеджер
                    </p>
                </div>

                <div class="col-lg-4 offset-4 right eighth">
                    <p>
                        Онлайн - поддержка 24/7
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

    <section class="feedback" id="feedback">

        <div class="col-lg-12">
            <h1>
                Нам доверяют
            </h1>
        </div>

        <div class="container flex-center">
            <div class="row">
                <div class="col-lg-2">
                    <img src="./img/Leroy_Merlin.svg" alt="Leroy">
                </div>
                <div class="col-lg-2">
                    <img src="./img/Samsung_Logo.svg" alt="Samsung" class="samsung">
                </div>
                <div class="col-lg-2">
                    <img src="./img/56857.png" alt="Profi" class="profi">
                </div>
                <div class="col-lg-2">
                    <img src="./img/avito.png" alt="Avito" class="avito">
                </div>
                <div class="col-lg-2">
                    <img src="./img/hands2.png" alt="hands" class="hands">
                </div>

            </div>
        </div>
    </section>

    <section class="last-call" id="last-call">
        <div class="container">
            <div class="row">
                    <div class="col-lg-12">
                        <button class="btn-1call">
                            СОЗДАТЬ БАННЕР
                        </button>
                    </div>
                </div>
        </div>
    </section>

    <section class="questions" id="questions">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>
                        Что такое Go Banner и для чего он нужен?
                    </h1>
                    <h3>
                        Ответы на эти и другие вопросы о работе программы ищите здесь!
                    </h3>
                    <img src="./img/line.png" alt="" class="line">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/orange.png" alt="">
                    <h2>
                        ЧТО ТАКОЕ GO BANNER?
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p>
                        Go Banner – автоматическая система для создания
                        HTML5, AMP HTML, PNG, GIF, JPEG баннеров онлайн.
                        Система идеально подходящая как профессионалам,
                        так и новым пользователям без знаний программирования.
                        Баннеры, созданные в Go Banner можно редактировать в любое время, 
                        так как хранятся они в облачном хранилище. 
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/purple.png" alt="">
                    <h2>
                        КАК ЭТО РАБОТАЕТ?
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/purple.png" alt="">
                    <h2>
                        ДЛЯ ЧЕГО НУЖЕН АВТОМАТИЧЕСКИЙ СЕРВИС GO BANNER?
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/purple.png" alt="">
                    <h2>
                        ЕСТЬ ЛИ ВОЗМОЖНОСТЬ БЕСПЛАТНОГО ИСПОЛЬЗОВАНИЯ GO BANNER?
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/purple.png" alt="">
                    <h2>
                        МОГУ ЛИ Я СКАЧАТЬ GO BANNER?
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/purple.png" alt="">
                    <h2>
                        ЧТО ТАКОЕ HTML5 БАННЕР?
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 d-flex">
                    <img src="./img/purple.png" alt="">
                    <h2>
                        МОГУ ЛИ Я ИСПОЛЬЗОВАТЬ СОЗДАННЫЕ БАННЕРЫ ПРИ ПОМОЩИ GO BANNER НА РЕКЛАМНЫХ ПЛОЩАДКАХ? 
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <?php require "./blocks/footer.php" ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
</body>
</html>