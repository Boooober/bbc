<?php

/*
* Template Name: Home Page RU
*/

get_header(); ?>

    <div class="fixed-panel">

        <header class="fixed-header header clearfix">
            <div class="header-content">
                <a href="#" id="logo" class="logo">
                    <figure>
                        <?php get_template_part('assets/svg/logo.svg'); ?>
                    </figure>
                </a>


                <div><a class="tel icon-phone" href="#">+ 33 753 67 43 42</a></div>

                <?php if(!bbc_mobile_detect()){ ?>
                    <div><a class="user-login icon-user" href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>">Client area</a></div>
                <?php } else{ ?>
                    <div></div>
                <?php } ?>

                <div>
                    <nav>
                        <?php
                        wp_nav_menu( array(
                            'container'      => '',
                            'menu_class'     => 'lang-menu',
                            'menu_id'        => '',
                            'theme_location' => 'langs',
                        ) );
                        ?>
                    </nav>
                </div>

                <?php if(bbc_mobile_detect()){ ?>
                    <div><a class="menu membership" href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>">membership</a></div>
                <?php } else { ?>
                    <div><button id="trigger-overlay" class="js-menu-trigger menu icon-menu" type="button"></button></div>
                <?php } ?>

            </div>
        </header>

        <aside id="next" class="next">
            <span class="icon-angle-down"></span>
        </aside>

        <aside class="box-aside-nav">
            <nav>
                <ul>
                    <li><a href="#home">Главная</a></li>
                    <li><a href="#service">Сервис</a></li>
                    <li><a href="#app">App</a></li>
                    <li><a href="#news">Новости</a></li>
                    <li><a href="#charter">Чартер</a></li>
                    <!--            <li><a href="#qrent">Qrent</a></li>-->
                </ul>
            </nav>
        </aside>

    </div>

    <div class="container">

        <?php if(bbc_mobile_detect()){
            get_template_part('parts/home_mob_ru');
        } else{
            get_template_part('parts/home_desk_ru');
        } ?>

    </div>

<?php get_footer(); ?>