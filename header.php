<header class="header">
    <div class="menu">
        <div class="logo">
            <?php
            if(has_custom_logo()){
                the_custom_logo();
            }
            ?>
        </div>
        <div class="burger">
            <span class="line"></span>
            <span class="line"></span>
        </div>
        <div class="nav-menu">
            <nav class="nav-main">
                <img class="dot-separator" src="<?php bloginfo("template_directory")?>/img/icons/dots.svg" alt="dots">

                <?php
                    wp_nav_menu([
                        'theme_location' => 'main',
                        'menu_class'     => 'nav-main__list',
                    ])
                ?>

<!--                <ul class="nav-main__list">-->
<!--                    <li class="nav-list__item">-->
<!--                        <a class="link nav-list__link" href="./our-screens.html">Наши экраны</a>-->
<!--                    </li>-->
<!--                    <li class="nav-list__item">-->
<!--                        <a class="link nav-list__link" href="./technical-requirements.html">Технические-->
<!--                            характеристики</a>-->
<!--                    </li>-->
<!--                    <li class="nav-list__item">-->
<!--                        <a class="link nav-list__link" href="./useful-information.html">Полезная информация</a>-->
<!--                    </li>-->
<!--                    <li class="nav-list__item">-->
<!--                        <a class="link nav-list__link" href="./our-screens.html">Контакты</a>-->
<!--                    </li>-->
<!--                </ul>-->
            </nav>
            <nav class="nav-secondary">
                <button class="button button-outlined button-price">Узнайте цену</button>
                <button class="button button-ghost">
                    <span class="lang-button__title">Язык: </span>
                    EN
                </button>
            </nav>
        </div>


    </div>
    <div class="sub-menu">
        <ul class="sub-menu__list">
            <li class="sub-menu__item"><a class="link" href="./about-us.html">O НАС</a></li>
            <li class="sub-menu__item"><a class="link" href="./news.html">НОВОСТИ</a></li>
        </ul>
    </div>
</header>