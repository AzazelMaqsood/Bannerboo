<?php 
require "../db.php";

    if( isset($data['do_signup']) )
    {
        $errors = array ();
        if( trim($data['login']) == '' )
        {
            $errors[] = 'Введите логин';
        }

        if( $data['password'] == '' )
        {
            $errors[] = 'Введите пароль';
        }

        if( $data['password2'] != $data['password'] )
        {
            $errors[] = 'Повторный пароль введен не верно';
        }

        if( R::count('users', "login = ?", array($data['login'])) >0)
        {
            $errors[] = 'Пользователь с таким логином уже существует';
        }

        if( R::count('users', "email = ?", array($data['email'])) >0)
        {
            $errors[] = 'Пользователь с таким Email уже существует';
        }

        if( empty($errors) )
        {
            $user = R::dispense('users');
            $user ->surname = $data['surname'];
            $user ->name = $data['name'];
            $user ->patronymic = $data['patronymic'];
            $user ->name_comp = $data['name_comp'];
            $user ->dolzhn = $data['dolzhn'];
            $user ->email = $data['email'];
            $user ->phone = $data['phone'];
            $user ->login = $data['login'];
            $user ->password = password_hash($data['password'], PASSWORD_DEFAULT);
            R::store($user);

            echo '<div class="container"><div id="success">Регистрация прошла успешно</div></div>';
        } else
        {
            echo '<div class="container"><div id="errors">'.array_shift($errors).'</div></div>';
        }

    }

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
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
    <?php require "../blocks/openModal.php" ?>
    <?php require "../blocks/header.php" ?>

    <section class="registration">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>
                    Регистрация нового пользователя
                </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5">
                <form action="./registration.php" method="POST">
                    <p>
                        <div class="form-group">
                            <input type="text" name="surname" class="form-control" id="InputSurnameReg" placeholder="Фамилия*" required value="<?php echo @$data['surname']; ?>">
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="InputNameReg" placeholder="Имя*" required value="<?php echo @$data['name']; ?>">
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="text" name="patronymic" class="form-control" id="InputOtch" placeholder="Отчество" value="<?php echo @$data['patronymic']; ?>">
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="text" name="name_comp" class="form-control" id="InputCompany" placeholder="Название компании*" required value="<?php echo @$data['name_comp']; ?>">
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="text" name="dolzhn" class="form-control" id="InputPost" placeholder="Должность*" required value="<?php echo @$data['dolzhn']; ?>">
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Рабочий e-mail*" required value="<?php echo @$data['email']; ?>">
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" id="InputPhone" placeholder="Контактный телефон" value="<?php echo @$data['phone']; ?>">
                        </div>
                    </p>

                    <p>
                        <sup>*</sup>Поля обязательные для заполнения
                    </p>

                    <p>
                        <div class="form-group">
                            <input type="text" name="login" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" id="InputLogin" placeholder="ПРИДУМАЙТЕ ЛОГИН" required value="<?php echo @$data['login']; ?>">
                        </div>
                    </p>

                    <p>
                        <div class="form-group">
                            <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" id="inputPasswordReg" placeholder="ПАРОЛЬ" required>
                        </div>
                    </p>
                    <p>
                        <div class="form-group">
                            <input type="password" name="password2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" class="form-control" id="inputPasswordReg2" placeholder="ПОДТВЕРДИТЕ ПАРОЛЬ" required>
                        </div>
                    </p>

                    
                   <p>
                    <button type="submit" class="btnReg" name="do_signup">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                   </p>
                </form>
            </div>

            <div class="col-lg-7">
                <img src="../img/regimg.png" alt="Иллюстрация">
                <p class="authtext">
                    Уже есть аккаунт? <a href="#openModal"> Пройдите авторизацию </a>
                </p>
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