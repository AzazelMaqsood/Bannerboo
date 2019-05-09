<?php 
require "db.php";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автоматическая система создания и ресайзов баннеров – GO-BANNER.RU</title>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700|PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        $("#tabs li:first").attr("id","current"); // Активируем первую закладку
        
        $('#tabs a').click(function(e) {
            e.preventDefault();        
            $("#tabs li").attr("id",""); //Сброс ID
            $(this).parent().attr("id","current"); // Активируем закладку
            
        });
    });
</script>
</head>
<body>
    <?php require "../blocks/openModal.php" ?>
    <?php require "../blocks/header.php" ?>

    <section class="profile">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                        <h1>ПРОФИЛЬ</h1>
                </div>

                <div class="col-lg-3 offset-6 d-flex justify-content-end helper">
                    <img src="../img/Helper.png" alt="helper" class="helperimg">
                    <a href="#openHelper">Написать в поддержку</a>
                    <div id="openHelper" class="modalDialogHelper">
                        <div>
                            <a href="#close" title="Закрыть" class="close">x</a>
                            
                            <h2>НАПИСАТЬ В ПОДДЕРЖКУ</h2>
                            <form action="#">
                            <div class="form-group">
                                <textarea name="message" id="message-text-helper" class="form-control message" placeholder="Введите сообщение"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Отправить</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <ul class="nav nav-pills" id="tabs">
                        <li class="active"><a href="#data" role="tab" data-toggle="pill">Личные данные</a></li>
                        <li><a href="#subscribe" role="tab" data-toggle="pill">Подписка</a></li>
                        <li><a href="#tarif" role="tab" data-toggle="pill">Тарифный план</a></li>
                        <li><a href="#payments" role="tab" data-toggle="pill">Платежи</a></li>
                    </ul>

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="data">
                            <div class="col-lg-8">
                                    <form action="#" method="POST">
                                 
                                            <p>
                                              <label>Фамилия <span>*</span></label>
                                              <input type="text" name="last_name">
                                            </p>
                                            <p>
                                              <label>Имя <span>*</span></label>
                                              <input type="text" name="first_name">
                                            </p>
                                            <p>
                                              <label>Отчество</label>
                                              <input type="text" name="surname">
                                          </p>
                                          <p>
                                              <label>Название компании <span>*</span></label>
                                              <input type="text" name="name_company">
                                          </p>
                                          <p>
                                              <label>Должность <span>*</span></label>
                                              <input type="text" name="position">
                                          </p>
                                            <p>
                                              <label>Рабочий e-mail <span>*</span></label>
                                              <input type="email" name="email">
                                            </p>
                                            <p>
                                              <label>Контактный телефон</label>
                                              <input type="tel" name="phone">
                                            </p>
                                            <p>
                                              <label>ПАРОЛЬ</label>
                                              <input type="password" name="password">
                                            </p>
                                            <p>
                                              <label>ПОДТВЕРДИТЕ ПАРОЛЬ</label>
                                              <input type="password" name="password_confirm">
                                            </p>
                                            
                                            <p class="prompt">
                                                    <span>*</span>Поля обязательные для заполнения
                                            </p>
                                            
                                            <button type="submit" class="btnSaveChange">
                                            СОХРАНИТЬ ИЗМЕНЕНИЯ
                                            </button>
                                          </form>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="subscribe">Подписка</div>
                        <div role="tabpanel" class="tab-pane fade" id="tarif">

                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-12 d-flex">
                                            <a href="#">Месячная подписка</a>
                                            <a href="#">Годовая подписка</a>
                                        </div>
                                    </div>
        
                                    <div class="row grey">
                                        <div class="col-lg-12">
                                            <h1>Месячная подписка</h1>
                                        </div>
        
                                        <div class="col-lg-4">
                                            <img src="../img/tarif-free.png" alt="Тариф бесплатный">
                                        </div>
        
                                        <div class="col-lg-4">
                                            <img src="../img/tarif-start.png" alt="Тариф бесплатный">
                                        </div>
        
                                        <div class="col-lg-4">
                                            <img src="../img/tarif-plus.png" alt="Тариф бесплатный">
                                        </div>
                                    </div>
                        </div>

                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="payments">
                            <div class="row block-pay">
                                <div class="col col-lg-3">
                                    <p>Ваш текущий тариф: <strong>СТАРТ</strong></p> 
                                </div>
                            </div>

                            <div class="container block-pay">
                                <div class="row grey">
                                    <div class="col-lg-3 d-flex">
                                        <p>Остаток: &nbsp</p>
                                        <p class="balance">$12,75</p>
                                    </div>
    
                                    <div class="col-lg-3 offset-6">
                                        <button class="make-payment">ВНЕСТИ ПЛАТЕЖ</button>
                                    </div>
                                </div>

                                <div class="row grey">
                                    <div class="col-lg-5 d-flex">
                                        <p>Последний платеж был совершен:  05.01.2019
                                                Внесенная сумма: $36</p>
                                    </div>
                                </div>

                                <div class="row grey down">
                                    <div class="col-lg-3 d-flex">
                                        <img src="../img/archive.png" alt="archive">
                                        <a href="#">Архив платежей</a>
                                    </div>
                                </div>
                                <div class="row grey down">
                                    <div class="col-lg-3 d-flex">
                                        <img src="../img/waypay.png" alt="archive">
                                        <a href="#">Способы оплаты</a>
                                    </div>
                                </div>
                                <div class="row grey down last">
                                    <div class="col-lg-3 d-flex">
                                        <img src="../img/settings.png" alt="archive">
                                        <a href="#">Настройки</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require "../blocks/footer.php" ?>    
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>