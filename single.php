<?php get_header(); ?>
<?php $templateurl = get_bloginfo('template_url'); ?>

<div class="container">
    <div class="page-wrapper ">
        <header class="header header-black">
            <div class="header-content">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo" class="logo">
                    <figure>
                        <?php get_template_part('assets/svg/logo.svg'); ?>
                    </figure>
                </a>

                <div class="close-btn">
                    <div class="push-content-close close-elements trigger">
                        <figure>
                            <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="35px" height="35px" viewBox="0 0 35 35" enable-background="new 0 0 35 35" xml:space="preserve">
                                <g>
                                    <path fill="#CCCCCC" d="M33,2v31H2V2H33 M35,0H0v35h35V0L35,0z"/>
                                </g>
                                <line fill="none" stroke="#1D1D1B" stroke-width="2" stroke-miterlimit="10" x1="20.814" y1="9.557" x2="12.186" y2="18.184"/>
                                <line fill="none" stroke="#1D1D1B" stroke-width="2" stroke-miterlimit="10" x1="20.814" y1="25.417" x2="12.186" y2="16.79"/>
                            </svg>
                        </figure>
                    </div>
                </div>


                <div><a class="tel icon-phone" href="#">+ 33 753 67 43 42</a></div>
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
                <div><button id="trigger-overlay" class="menu icon-menu" type="button"></button></div>
            </div>
        </header>
        <div class="entry-content">

            <?php if( have_posts() ) :
                while ( have_posts())  : the_post();
                    $post_id = get_the_ID();
                    ?>

                    <?php
                    $custom_date = get_post_meta($post_id, 'Date', true);
                    $custom_month = get_post_meta($post_id, 'Month-Year', true); ?>

                    <div class="margin-aside"><h1><?php the_title(); ?></h1></div>


                    <div class="row">
                        <div class="col page-aside">
                            <aside>
                                <div class="date">
                                    <?php if( $custom_date && $custom_month ){ ?>
                                        <p><span><?php echo $custom_date; ?></span> <?php echo $custom_month; ?></p>
                                    <?php }else{ ?>
                                        <p><span><?php echo get_the_date( 'j', $post_id ); ?></span> <?php echo get_the_date( 'F Y', $post_id ); ?></p>
                                    <?php } ?>
                                </div>
                                <div class="soc-icons">
                                    <ul>
                                        <li><a class="icon-facebook" href="https://www.facebook.com/BourBonLifeStyle" target="_blank"></a></li>
                                        <li><a class="icon-instagram" href="https://instagram.com/bourbonlifestyle/" target="_blank"></a></li>
                                        <li><a class="icon-linkedin" href="https://www.linkedin.com/company/bourbon&co" target="_blank"></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="content clearfix margin-aside">
                            <div class="col text">
                                <?php the_content(); ?>
                            </div>
                            <div class="col images">
                                <?php if(have_rows('images')):
                                    while(have_rows('images')): the_row();
                                        if($img = get_sub_field('image')){

                                            $img_size_val = get_sub_field('set_image_size');
                                            $img_size = mb_strtolower( is_array( $img_size_val ) ? array_shift($img_size_val) : $img_size_val ).'-image';

                                            $img_src = $img['sizes'][$img_size];

                                            $img_alt = $img['alt'];

                                            echo '<figure class="image"><img src="'.$img_src.'" alt="'.$img_alt.'"/></figure>';
                                        }

                                    endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
            endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>