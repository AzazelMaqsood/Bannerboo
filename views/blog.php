<?php 
require "../db.php" ?>
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
 
    <section class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    БЛОГ
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <img src="../img/blog-pic.png" alt="">
            </div>

            <div class="col-lg-9">
                <div class="kalendar d-flex">
                        <img src="../img/kalendar-icon.png" alt="">
                        <p>
                            21.02.2019
                        </p>
                </div>

                <h2>
                        5 вещей, о которых нужно помнить перед началом
                         маркетинговой кампании
                </h2>

                <p>
                        Для всех, кто не связан тесно с маркетингом, генерация лидов представляется легким и быстрым занятием — ведь все, что нужно, это запустить «маркетинговую кампанию». 
                </p>
                <p>
                        Но, в реальной жизни, все выглядит совсем не так. 
                </p>
                <p>
                        Вот пять вещей, которые вы должны четко понимать, прежде чем окунуться с головой в мир лидогенераций и больших прибылей.
                </p>

                <a href="./blog-more">
                    <button class="btn-more-blog">
                        Подробнее
                    </button>
                </a>
            </div>
        </div>


        <div class="row">
                <div class="col-lg-3">
                    <img src="../img/blog-pic.png" alt="">
                </div>
    
                <div class="col-lg-9">
                    <div class="kalendar d-flex">
                            <img src="../img/kalendar-icon.png" alt="">
                            <p>
                                21.02.2019
                            </p>
                    </div>
    
                    <h2>
                            5 вещей, о которых нужно помнить перед началом
                             маркетинговой кампании
                    </h2>
    
                    <p>
                            Для всех, кто не связан тесно с маркетингом, генерация лидов представляется легким и быстрым занятием — ведь все, что нужно, это запустить «маркетинговую кампанию». 
                    </p>
                    <p>
                            Но, в реальной жизни, все выглядит совсем не так. 
                    </p>
                    <p>
                            Вот пять вещей, которые вы должны четко понимать, прежде чем окунуться с головой в мир лидогенераций и больших прибылей.
                    </p>

                    <a href="./blog-more">
                        <button class="btn-more-blog">
                            Подробнее
                        </button>
                    </a>
                </div>
            </div>

            <div class="row">
                    <div class="col-lg-3">
                        <img src="../img/blog-pic.png" alt="">
                    </div>
        
                    <div class="col-lg-9">
                        <div class="kalendar d-flex ">
                                <img src="../img/kalendar-icon.png" alt="">
                                <p>
                                    21.02.2019
                                </p>
                        </div>
        
                        <h2>
                                5 вещей, о которых нужно помнить перед началом
                                 маркетинговой кампании
                        </h2>
        
                        <p>
                                Для всех, кто не связан тесно с маркетингом, генерация лидов представляется легким и быстрым занятием — ведь все, что нужно, это запустить «маркетинговую кампанию». 
                        </p>
                        <p>
                                Но, в реальной жизни, все выглядит совсем не так. 
                        </p>
                        <p>
                                Вот пять вещей, которые вы должны четко понимать, прежде чем окунуться с головой в мир лидогенераций и больших прибылей.
                        </p>

                        <a href="./blog-more">
                            <button class="btn-more-blog">
                                Подробнее
                            </button>
                        </a>
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