<header class="header-blog" id="header-blog">
    <div class="container">
        <div class="row">   
            <div class="col-lg-4 d-flex">
                <a href="../index.html"><img src="../img/logo.png" alt="logo" class="logo"></a>
                <p class="logo-text">Онлайн-конструктор <br>
                    HTML5 баннеров</p>
            </div>

            <div class="col-lg-8">
                <nav>
                    <ul class="menu d-flex justify-content-end">
                        <li class="dropdown menu__item">
                            <a href="#" class="" data-toggle="dropdown">Создать баннер</a>
                            <ul class="dropdown-menu">
                                <li><a href="./create-banner.html">Создать баннер</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Создать ресайз</a></li>
                                <li><a href="./campaigns.html">Мои кампании</a></li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a href="./blog.php">
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

                        <a href="#openModal">
                            <button class="btn-profile">
                                <img src="../img/profile-icon.png" alt="">
                                Иван Иванов
                            </button>
                        </a>

                        <div id="openModal" class="modalDialog">
                            <div>
                                <a href="#close" title="Закрыть" class="close">x</a>
                                
                                <h2>АВТОРИЗАЦИЯ</h2>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputSurname" placeholder="Введите логин">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="InputName" placeholder="Введите пароль">
                                    </div>
        
                                    <a href="#0" class="forget other">Забыли свой пароль?</a>
        
                                    <button type="submit" class="btnLogin">ВОЙТИ</button>
                                </form>
        
                                <p>
                                    Нет аккаунта? Пройдите <a href="../views/registration.html" class="other">Регистрацию</a>
                                </p>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
    </div>
</header>