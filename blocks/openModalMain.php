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
                echo '<div class="container"><div id="errors">Вы авторизовались</div></div>';
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
            echo '<div class="container"><div id="errors">'.array_shift($errors).'</div></div>';
        }
    }

?>

<div id="openModal" class="modalDialog">
    <div>
        <a href="#close" title="Закрыть" class="close">x</a>
        
        <h2>АВТОРИЗАЦИЯ</h2>
        <form action="./views/profile.php" method="POST">
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