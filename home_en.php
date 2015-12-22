<?php

/*
* Template Name: Home Page EN
*/

get_header(); ?>
	<div class="container">

		<?php if(bbc_mobile_detect()){
			get_template_part('parts/home_mob_ru');
		} else{
			get_template_part('parts/home_desk_ru');
		} ?>

	</div>
<?php get_footer(); ?>