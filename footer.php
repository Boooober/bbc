<?php $templateurl = get_bloginfo('template_url'); ?>

<div class="fixed-panel">

	<header class="fixed-header header clearfix<?php if (bbc_mobile_detect()) echo 'solid-header'; ?>">
		<div class="header-content clearfix">
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

	<?php if(!bbc_mobile_detect()){ ?>

		<aside id="next" class="next">
			<span class="icon-angle-down"></span>
		</aside>

	<?php } ?>

	<aside class="box-aside-nav">
		<nav>
			<?php
			// Primary navigation menu.
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => '',
				'menu_id'        => '',
				'theme_location' => '',
			) );
			?>
		</nav>
	</aside>

</div>


<?php if(!bbc_mobile_detect()){ ?>
    <div class="overlay overlay-contentpush" style="background: rgba(8, 26, 44, 0.98)">
        <div class="overlay-wrapper<?php echo bbc_mobile_detect() ? ' mobile' : '' ?>">

            <div class="header-part">
                <div class="header-content clearfix">
                    <a href="#home" id="menu-logo" class="logo">
                        <figure>
                            <?php get_template_part('assets/svg/logo.svg'); ?>
                        </figure>
                    </a>

                    <div><a class="user-login icon-user" href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>">Client area</a></div>
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
                    <div><button type="button" class="overlay-close icon-cancel"></button></div>
                </div>

            </div>
            <!--./header-part-->

            <div class="main-part">
                <div class="row">

                    <?php if(!bbc_mobile_detect()){ ?>

                    <div class="col left">
                        <div class="main-menu">
                            <nav>

                                <?php
                                // Primary navigation menu.
                                wp_nav_menu( array(
                                    'container'      => '',
                                    'menu_class'     => 'cat-menu',
                                    'menu_id'        => '',
                                    'theme_location' => 'cat',
                                ) );
                                ?>

                            </nav>
                        </div>

                    </div>
                    <!--./col left-->
                    <?php } ?>

                    <div class="col right">
                        <div class="form">
                            <p class="form-title"><?php pll_e('Form title'); ?> <b>Bourbon&Co</b></p><!--Добро пожаловать в клуб консьерж-сервиса-->
                            <form id="feedback-form" action="">
                                <div class="line">
                                    <lable for="fname" class="lable-none"><?php pll_e('Your name'); ?></lable>
                                    <input class="form-input" type="text" name="fname" id="fname" placeholder="<?php pll_e('Your name'); ?>"/>
                                </div>

                                <div class="line">
                                    <lable for="fphone" class="lable-none"><?php pll_e('Your telephone'); ?></lable>
                                    <input class="form-input" type="text" name="fphone" id="fphone" placeholder="<?php pll_e('Your telephone'); ?>"/>
                                </div>

                                <div class="line">
                                    <lable for="femail" class="lable-none"><?php pll_e('Your email'); ?></lable>
                                    <input class="form-input" type="text" name="femail" id="femail" placeholder="<?php pll_e('Your email'); ?>"/>
                                </div>

                                <div class="line">
                                    <textarea class="form-input" rows="3" name="fquestion" id="fquestion" placeholder="<?php pll_e('Your question'); ?>"></textarea>
                                </div>

                                <input class="submit" type="submit" value="<?php pll_e('SEND'); ?>"/>
                            </form>
                            <div class="form-response"></div>
                        </div>

                    </div>
                    <!-- ./col right -->

                </div>
                <!--./row-->

                <div class="add-info">
                    <div class="contacts">
                        <h3><?php pll_e('Contacts'); ?></h3>
                        <p><?php pll_e('Phone Number'); ?><!--+ 33 753 67 43 42--></p>
                        <p><?php pll_e('bonjour@bbluxurytime.com'); ?></p>
                    </div>
                    <div class="soc-icons">
                        <ul>
                            <li><a class="icon-facebook" href="https://www.facebook.com/BourBonLifeStyle" target="_blank"></a></li>
                            <li><a class="icon-instagram" href="https://instagram.com/bourbonlifestyle/" target="_blank"></a></li>
                            <li><a class="icon-linkedin" href="https://www.linkedin.com/company/bourbon&co" target="_blank"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <!--./main part-->

        </div>
    </div>
<?php } ?>

        <?php wp_footer(); ?>

    </body>
</html>
