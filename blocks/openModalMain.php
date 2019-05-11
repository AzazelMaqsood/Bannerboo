<?php 

    if( isset($data['do_login']) )
    {
        $errors = array();
        $user = R::findOne('users', 'login = ?', array($data['login']) );
        if( $user )
        {
            if( password_verify($data['password'], $user->password))
            {
                $_SESSION['logged_user'] = $user;
                echo '<div class=""><div id="errors" class="alert alert-success alert-dismissible" role="alert" style="margin-bottom:0px; text-align: center;"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>Вы авторизовались</div></div>';
            } else 
            {
                $errors[] = 'Неверно введен пароль';
            }
        } else 
        {
            $errors[] = 'Пользователь с таким логином не найден';
        }

        if( !empty($errors) )
        {
            echo '<div class=""><div id="errors" class="alert alert-warning alert-dismissible" role="alert" style="margin-bottom:0px; text-align: center;"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>'.array_shift($errors).'</div></div>';
        }
    }

?>

<div id="openModal" class="modalDialog">
    <div>
        <a href="#close1" title="Закрыть" class="close1">x</a>
        
        <h2>АВТОРИЗАЦИЯ</h2>
        <form action="/" method="POST">
            <p>
                <div class="form-group">
                    <input type="text" name="login" class="form-control" placeholder="Введите логин" required value="<?php echo @$data['login']; ?>">
                </div>
            </p>
            <p>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Введите пароль" required>
                </div>
            </p>

            <a href="#" class="forget other">Забыли свой пароль?</a>

            <p>
                <button type="submit" name="do_login" class="btnLogin">ВОЙТИ</button>
            </p>
        </form>

        <p>
            Нет аккаунта? Пройдите <a href="./views/registration.php" class="other">Регистрацию</a>
        </p>
    </div>
</div>