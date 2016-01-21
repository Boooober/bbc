<?php

/*
* Template Name: Home Page FR
*/

get_header(); ?>
	<div class="container">

		<?php if(bbc_mobile_detect()){
			get_template_part('parts/home_mob_fr');
		} else{
			get_template_part('parts/home_desk_fr');
		} ?>

	</div>
<?php get_footer(); ?>