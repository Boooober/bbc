<?php $templateurl = get_bloginfo('template_url'); ?>
<?php get_template_part('parts/preloader'); ?>


<div id="fullpage">

    <div id="box-1" class="section box-1 switch-box">
        <div class="switch-background">
            <div class="video-background">
                <video class="active" muted="" preload="auto" loop autoplay>
                    <source src="<?php echo $templateurl; ?>/assets/video/mp4/CARS_02.mp4" type='video/mp4' />
                    <source src="<?php echo $templateurl; ?>/assets/video/webm/CARS_02.webmhd.webm" type='video/webm' />
                </video>
            </div>
        </div>


        <div class="box-container">
            <h2 class="box-title">Bourbon Lifestyle Management</h2>

            <div class="description">
                <p>We present you the professional Lifestyle services all over the world. With us you will be fully permitted to manage your own time twenty-four seven without leaving home, hotel or office. Every year we create the brightest impressions, unforgettable meetings and comfortable conditions for your life and relaxation. Install the mobile application Bourbon and use all its benefits today.</p>
            </div>

        </div>
    </div>



    <div id="box-2" class="section box-2 switch-box switching">

        <div class="switch-background">
            <!--                <div class="box-background">-->
            <figure class="image-background">
                <img data-background="1" class="animate active" src="<?php echo $templateurl; ?>/assets/images/box-2/life_style.jpg" alt=""/>
            </figure>
            <figure class="image-background">
                <img data-background="2" src="<?php echo $templateurl; ?>/assets/images/box-2/luxury_charter.jpg" alt=""/>
            </figure>
            <figure class="image-background">
                <img data-background="3" src="<?php echo $templateurl; ?>/assets/images/box-2/event_service.jpg" alt=""/>
            </figure>
            <figure class="image-background">
                <img data-background="4" src="<?php echo $templateurl; ?>/assets/images/box-2/real_estate.jpg" alt=""/>
            </figure>
            <figure class="image-background">
                <img data-background="5" src="<?php echo $templateurl; ?>/assets/images/box-2/business.jpg" alt=""/>
            </figure>
            <!--                </div>-->
        </div>
        <div class="box-container">
            <h2 class="box-title">Our services</h2>
            <div class="box-content">
                <div class="row">
                    <div class="col left box-description">&nbsp;
                        <div data-description="lifestyle" class="js-description" style="display:block">
                            <h3 class="title">Lifestyle</h3>
                            <div class="description">
                                <p>Going on a journey or a business trip everybody faces with a number of different questions. Our main task it is to organize client's personal space and provide comfort in all things.</p>
                                <p>The invitations to the best parties and private events, golf, horseraces, yacht trips, races on the luxury automobiles, or if you want flights on fighter planes. We have no limits in providing the luxury-services; we will select the optimal tour in concordance with all your expectations.</p>
                            </div>
                        </div>

                        <div data-description="transfers" class="js-description">
                            <h3 class="title">Luxury Charters</h3>
                            <div class="description">
                                <p>We provide a hire and transferring of any kind of VIP transport, such as sophisticated yachts, comfortable helicopters and the best charter planes. Also we provide a hire of the luxurious automobiles all over the world , such as Bentley, Lamborghini, Porsche, Maserati, Ferrari, Rolls-Royce, etc.</p>
                                <p>Wherever you go, with Bourbon you will be definitely in loco in time being in a good mood. We will meet you at the airport, or for your convenience, we can deliver you needed transportation any time any place.</p>
                            </div>
                        </div>
                        <div data-description="eventservice" class="js-description">
                            <h3 class="title">Event Service</h3>
                            <div class="description">
                                <p>For the corporate clients we offer the different kinds of services of organization of events: the exhibitions, conferences, business lunches, meetings with partners, gala dinners, yacht parties, birthdays, weddings and many others.</p>
                                <p>We will undertake all the organizational concerns will rent an accommodation and an individual location, we will provide equipment, make a menu, scenario, will meet your guests at the airport and will take care of your event to become the refined entertainment with the magnificent scenery.</p>
                            </div>
                        </div>

                        <div data-description="realty" class="js-description">
                            <h3 class="title">Realty</h3>
                            <div class="description">
                                <p>The castles, country seats, villas, chalets – we will help to find an ideal house just for you. We will help in purchase and sale of the property or in making rental contract for a week, month or any other convenient for you time.</p>
                                <p>We collaborate only with reliable partners and guarantee our clients safety, privacy and comfort. Many of proposals are exclusive and are offered only by our company. We will select the property in coincidence with your individual needs and will ensure the presence of maintenance workers in accordance with your desire.</p>
                            </div>
                        </div>

                        <div data-description="business" class="js-description">
                            <h3 class="title">Business</h3>
                            <div class="description">
                                <p>We will provide organizational support and legal backing for successful conducting business. We guarantee to each our client privacy and professional approach.</p>
                                <p>We control the compliance of imposed requirements we will take care of bookkeeping and will help in preparation of reporting in accordance with international standards.  Due to long experience of working business-technology adoption our clients always get the individual solutions of specified tasks.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col right">
                        <div class="row">
                            <div class="col">
                                <div data-description="lifestyle" data-background="1" class="item-list switch-trigger">
                                    <figure>
                                        <?php get_template_part('assets/svg/icons_service/lifestyle.svg'); ?>
                                    </figure>
                                    <h4 class="item-title noselect">Lifestyle</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div data-description="transfers" data-background="2" class="item-list switch-trigger">
                                    <figure>
                                        <?php get_template_part('assets/svg/icons_service/charter.svg'); ?>
                                    </figure>
                                    <h4 class="item-title noselect">Luxury Charters</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div data-description="eventservice" data-background="3" class="item-list switch-trigger">
                                    <figure>
                                        <?php get_template_part('assets/svg/icons_service/event.svg'); ?>
                                    </figure>
                                    <h4 class="item-title noselect">Event Service</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div data-description="realty" data-background="4" class="item-list switch-trigger">
                                    <figure>
                                        <?php get_template_part('assets/svg/icons_service/property-rent.svg'); ?>
                                    </figure>
                                    <h4 class="item-title noselect">Realty</h4>
                                </div>
                            </div>
                            <div class="col">
                                <div data-description="business" data-background="5" class="item-list switch-trigger">
                                    <figure>
                                        <?php get_template_part('assets/svg/icons_service/business.svg'); ?>
                                    </figure>
                                    <h4 class="item-title noselect">Business</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="box-3" class="section box-3 switch-box">

        <div>
            <div class="video-background">
                <video muted="" preload="auto" loop class="active">
                    <source src="<?php echo $templateurl; ?>/assets/video/mp4/NIGHT.mp4" type='video/mp4' />
                    <source src="<?php echo $templateurl; ?>/assets/video/webm/NIGHT.webmhd.webm" type='video/webm' />
                </video>
            </div>
        </div>


        <div class="box-container">
            <h2 class="box-title">Bourbon Lifestyle <br />Management</h2>
            <div class="row box-content">
                <div class="col">
                    <div class="box-item">
                        <span class="number"><span class="numbinc">6</span></span>
                        <span class="desc">years in a market of Luxury services</span>
                    </div>
                </div>
                <div class="col">
                    <div class="box-item">
                        <span class="number"><span class="numbinc">470</span></span>
                        <span class="desc">client from 23 countries of the world</span>
                    </div>
                </div>
                <div class="col">
                    <div class="box-item">
                        <span class="number"><span class="numbinc">24</span>/7</span>
                        <span class="desc">client from 23 countries of the world</span>
                    </div>
                </div>
                <div class="col">
                    <div class="box-description">
                        <p> It doesn’t matter where our clients are now; we will provide them comprehensive information and will grant all their requests shortest possible time.</p>
                        <p>We consider all the desires and personal needs of our clients. We keep in touch with the service and other companies the services of which they got used to use. We communicate with their domestic staff. We remind of important dates and even know which presents and for whom have to give.</p>
                        <p>Our team it is a team of professionals that’s why we can guarantee to each our client an individual and immaculate approach.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="box-4" class="section box-4" style="background-image: url('<?php echo $templateurl; ?>/assets/images/bbc_4.jpg');">
        <div class="box-container">
            <div class="clearfix switching">
                <div class="box-image">
                    <figure class="outer-img">
                        <?php get_template_part('assets/svg/iphone_wireframe.svg'); ?>
                    </figure>
                    <div class="inner-images">
                        <figure data-image="1" class="active">
                            <img src="<?php echo $templateurl ?>/assets/images/phone-inner_1.png" alt=""/>
                        </figure>
                        <figure data-image="2">
                            <img src="<?php echo $templateurl ?>/assets/images/phone-inner_2.png" alt=""/>
                        </figure>
                        <figure data-image="3">
                            <img src="<?php echo $templateurl ?>/assets/images/phone-inner_3.png" alt=""/>
                        </figure>
                        <figure data-image="4">
                            <img src="<?php echo $templateurl ?>/assets/images/phone-inner_4.png" alt=""/>
                        </figure>
                        <figure data-image="5">
                            <img src="<?php echo $templateurl ?>/assets/images/phone-inner_5.png" alt=""/>
                        </figure>
                    </div>
                </div>
                <div class="box-content">
                    <div class="box-head">
                        <p>The mobile application Bourbon it is your right hand.</p>
                        <p>Just in two clicks you can:</p>
                    </div>

                    <ul class="row">
                        <li class="col switch-image" data-image="1">
                            <div class="item">
                                <figure>
                                    <?php get_template_part('assets/svg/icons_app/car.svg'); ?>
                                </figure>
                                <p>To hire a supercar</p>
                                <p>The exclusive and powerful automobiles  both for a long term and for one day</p>
                            </div>

                        </li>
                        <li class="col switch-image" data-image="2">
                            <div class="item">
                                <figure>
                                    <?php get_template_part('assets/svg/icons_app/charter.svg'); ?>
                                </figure>
                                <p>To order the charter flight by plane or helicopter</p>
                                <p>The air transport of different capacity and comfort level</p>
                            </div>
                        </li>
                        <li class="col switch-image" data-image="3">
                            <div class="item">
                                <figure>
                                    <?php get_template_part('assets/svg/icons_app/yacht.svg'); ?>
                                </figure>
                                <p>To rent a yacht </p>
                                <p>The well-groomed and prepared yachts suit any taste and for different purposes</p>
                            </div>
                        </li>
                        <li class="col switch-image" data-image="4">
                            <div class="item">
                                <figure>
                                    <?php get_template_part('assets/svg/icons_app/property-rent.svg'); ?>
                                </figure>
                                <p>To choose the best apartments in French Riviera</p>
                                <p>The individual selection of luxury property and apartments for residences and investments</p>
                            </div>
                        </li>
                        <li class="col switch-image" data-image="5">
                            <div class="item">
                                <figure>
                                    <?php get_template_part('assets/svg/icons_app/cvent.svg'); ?>
                                </figure>
                                <p>To order an organization of a party or any other event</p>
                                <p>Immaculate service and an abundance of entertainments anywhere in the world</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="box-6" class="section box-6">
        <div class="box-container">
            <h2 class="box-title">Calendar of events</h2>
	        <div class="event-slider">
		        <div class="owl-carousel-events">

			        <?php
			        $args = array(
				        'cat' => 1,
				        'posts_per_page' => 15,
				        'post_status' => 'publish'
			        );

			        $query = new WP_Query($args);

			        if($query->have_posts()) :
				        while ($query->have_posts()) : $query->the_post();

					        $post_id = get_the_ID();
					        $img_id = get_post_thumbnail_id( $post_id );
					        $img_attr = wp_get_attachment_image_src( $img_id, 'small-crop');
					        $img_url = $img_attr[0];
					        $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);

					        include( locate_template( 'templates/news_template.php' ) );

				        endwhile;
			        endif;
			        ?>

		        </div>
	        </div>

            <h2 class="box-title">News</h2>
	        <div class="event-slider">
		        <div class="owl-carousel-news">

			        <?php
			        $args = array(
				        'cat' => 2,
				        'posts_per_page' => 3,
				        'post_status' => 'publish'
			        );

			        $query = new WP_Query($args);

			        if($query->have_posts()) :
				        while ($query->have_posts()) : $query->the_post();

					        $post_id = get_the_ID();
					        $img_id = get_post_thumbnail_id( $post_id );
					        $img_attr = wp_get_attachment_image_src( $img_id, 'small-crop');
					        $img_url = $img_attr[0];
					        $img_alt = get_post_meta($img_id, '_wp_attachment_image_alt', true);


					        include( locate_template( 'templates/news_template.php' ) );

				        endwhile;
			        endif;
			        ?>

		        </div>
	        </div>
        </div>
    </div>


    <div id="box-7" class="section box-7 switch-box">

        <div>
            <div class="video-background">
                <video muted="" preload="auto" loop class="active">
                    <source src="<?php echo $templateurl; ?>/assets/video/mp4/AIRCRAFT+YACHT.mp4" type='video/mp4' />
                    <source src="<?php echo $templateurl; ?>/assets/video/webm/AIRCRAFT+YACHT.webmhd.webm" type='video/webm' />
                </video>
            </div>
        </div>

        <div class="box-container">
            <h2 class="box-title">Transport</h2>
            <div class="box-content clearfix">
                <div class="row">
                    <div class="col">
                        <div class="item clearfix">
                            <figure>
                                <img src="<?php echo $templateurl; ?>/assets/images/yachts.jpg" alt=""/>
                            </figure>
                            <div class="item-content">
                                <h2>THE YACHTS</h2>
                                <p>An unforgettable recreation and the vivid impressions are guaranteed for you – gather with the cheerful company and set off the fascinating cruise. The refined sailing and motor yachts of premium class are waiting for you on board.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item clearfix">
                            <figure>
                                <img src="<?php echo $templateurl; ?>/assets/images/airplane.jpg" alt=""/>
                            </figure>
                            <div class="item-content">
                                <h2>THE PLANES</h2>
                                <p>Do you need a plane urgently? Are there several hours before departure time? No problems! We guarantee a timely solution of high quality. The charters all over the world by planes of business class are at your service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="item clearfix">
                            <figure>
                                <img src="<?php echo $templateurl; ?>/assets/images/helicopter.jpg" alt=""/>
                            </figure>
                            <div class="item-content">
                                <h2>THE HELICOPTERS</h2>
                                <p>We will organize the transfers and panoramic flights by helicopters for you anywhere in the world. Enjoy a fine view and derive enjoyment from the flight. Our helicopters will make your flight as much comfortable and safe as possible.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="item clearfix">
                            <figure>
                                <img src="<?php echo $templateurl; ?>/assets/images/car.jpg" alt=""/>
                            </figure>
                            <div class="item-content">
                                <h2>THE AUTOMOBILES</h2>
                                <p>For the real connoisseurs of luxury and speed we offer a wide variety of supercars for renting: more than 100 of the exclusive automobiles from leading brands. It doesn't matter where you are, with our mobile application Bourbon you can rent an automobile just in some clicks.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--        <div class="section box-8">-->
    <!--            <div class="box-container">-->
    <!--                <div class="box-content clearfix">-->
    <!--                    <div class="qrent-bg">-->
    <!--                        <div class="fig-circles">-->
    <!--                            <figure>-->
    <!--                                <img src="--><?php //echo $templateurl; ?><!--/assets/images/qrent-iphone.png" alt=""/>-->
    <!--                            </figure>-->
    <!--                        </div>-->
    <!--                        <ul class="qrent-list">-->
    <!--                            <li class="qrent-item">Безупречный сервис</li>-->
    <!--                            <li class="qrent-item">Гарантия качества</li>-->
    <!--                            <li class="qrent-item">Шикарный автопарк</li>-->
    <!--                            <li class="qrent-item">Поддержка 24/7</li>-->
    <!--                            <li class="qrent-item">Заказ в 2 шага</li>-->
    <!--                        </ul>-->
    <!--                    </div>-->
    <!--                    <div class="qrent-content">-->
    <!--                        <h2>QRent — прокат суперкаров</h2>-->
    <!--                        <p>Автомобили премиум-класса и спорткары от ведущих автопроизводителей – у нас собраны все «сливки» современной автоиндустрии.-->
    <!--                            Наслаждайтесь поездкой с максимальным комфортом, будьте в центре внимания и получайте от жизни максимум!-->
    <!--                            Только для настоящих ценителей роскошных и качественных авто, мы предлагаем широкий выбор суперкаров напрокат.</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->

    <div id="contacts-box" class="section contacts-box">
        <div class="contacts-box-bg animate"></div>
        <div class="box-container">

<!--            <h2 class="box-title">Contacts</h2>-->
            <div class="box-content">

	            <div class="contacts-list">
		            <h3>Contact Us</h3>
		            <div class="row">
			            <div class="col">
				            <div class="office">
					            <p>Europe Office </p>
	                            <b>+ 33 753 67 43 42<br />email@europe.com</b>
				            </div>
			            </div>
			            <div class="col">
				            <div class="office">
					            <p>U.S.A. Office</p>
	                            <b>+ 33 753 67 43 42<br />email@usa.com </b>
				            </div>
			            </div>
			            <div class="col">
				            <p>Advertising <span>& Marketing office</span><b>marketing@bourbon.mc </b></p>
				            <p>New Business<b>newbusiness@bourbon.mc</b></p>
			            </div>
			            <div class="col">
				            <p>Transfer & Charter<b>transfer@bourbon.mc</b></p>
				            <p>Concierge Service<b> welcome@bourbon.mc</b></p>
			            </div>
		            </div>
	            </div>



                <div class="map">
                    <div class="distribution-map">
                        <img src="<?php echo $templateurl.'/assets/images/map.png'?>">
                        <button class="map-point" style="top:49%;left:26%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Miami</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:37%;left:47.8%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Courchevel</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:40%;left:48.8%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Monako, Nice, Cannes, St Tropez</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:40%;left:28.5%">
                            <div class="content">
                                <div class="centered">
                                    <h4>New York</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:43.4%;left:45.6%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Mardella, Sotogrande</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:41%;left:46%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Madrid</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:50%;left:61%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Abu Dhabi</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:78%;left:87%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Brisane</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                        <button class="map-point" style="top:54%;left:8%">
                            <div class="content">
                                <div class="centered">
                                    <h4>Hawaii</h4>
                                    <a href="<?php echo esc_url( home_url( '/' ) ).'client-area/'; ?>" rel="nofollow">Contact Us</a>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
<!--            <div id="copyright">--><?php //get_template_part('parts/witty_copy'); ?><!--</div>-->
        </div>

        <?php get_template_part('parts/witty_copy'); ?>
    </div>
</div>