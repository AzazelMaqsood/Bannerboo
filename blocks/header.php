
<header class="header-blog" id="header-blog">
    <div class="container">
        <div class="row">   
            <div class="col-lg-4 d-flex">
                <a href="../index.php"><img src="../img/logo.png" alt="logo" class="logo"></a>
                <p class="logo-text">Онлайн-конструктор <br>
                    HTML5 баннеров</p>
            </div>

            <div class="col-lg-8">
                <nav>
                    <ul class="menu d-flex justify-content-end">
                        <li class="dropdown menu__item">
                            <a href="#" class="" data-toggle="dropdown">Создать баннер</a>
                            <ul class="dropdown-menu">
                                <li>
                                <?php if( isset($_SESSION['logged_user'])) :?>
                                
                                <a href="./create-banner.php">Создать баннер</a></li>

                                <?php else : ?>
                                <a href="#openModal">Создать баннер</a></li>
                                <?php endif; ?>
                                </li>

                                <li class="divider"></li>
                                <li>
                                <?php if( isset($_SESSION['logged_user'])) :?>
                                
                                <a href="./create-banner.php">Создать ресайз</a></li>

                                <?php else : ?>
                                <a href="#openModal">Создать ресайз</a></li>
                                <?php endif; ?>
                                </li>
                                <li>
                                <?php if( isset($_SESSION['logged_user'])) :?>
                                
                                <a href="./campaigns.php">Мои кампании</a></li>

                                <?php else : ?>
                                <a href="#openModal">Мои кампании</a></li>
                                <?php endif; ?>
                                </li>
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a href="./blog.php">
                                Блог
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="">
                                <?php if( isset($_SESSION['logged_user'])) :?>
                                
                                <a href="./profile.php">Тарифы</a></li>

                                <?php else : ?>
                                <a href="#openModal">Тарифы</a></li>
                                <?php endif; ?>
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="#">
                                Контакты
                            </a>
                        </li>
                        <a href="">
                            <?php if( isset($_SESSION['logged_user'])) :?>
                            <a href="../logout.php"><button class="btn-profile">Выйти</button></a>
                            <?php else : ?>
                            <a href="#openModal"><button class="btn-profile">Войти</button></a>
                            <?php endif; ?>
                        </a>
                    </ul>
                </nav>
            </div>
    </div>
</header>