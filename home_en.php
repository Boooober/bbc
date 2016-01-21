<?php

/*
* Template Name: Home Page EN
*/

get_header(); ?>
	<div class="container">

		<?php if(bbc_mobile_detect()){
			get_template_part('parts/home_mob_en');
		} else{
			get_template_part('parts/home_desk_en');
		} ?>

	</div>
<?php get_footer(); ?>