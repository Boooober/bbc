<a href="<?php the_permalink(); ?>">
    <div class="event-slide">
        <div class="table">
            <div class="date cell">
                <?php
                $custom_date = get_post_meta($post_id, 'Date', true);
                $custom_month = get_post_meta($post_id, 'Month-Year', true);

                if( $custom_date && $custom_month ){ ?>
                    <p><span><?php echo $custom_date; ?></span> <?php echo $custom_month; ?></p>
                <?php }else{ ?>
                    <p><span><?php echo get_the_date( 'j', $post_id ); ?></span> <?php echo get_the_date( 'F Y', $post_id ); ?></p>
                <?php } ?>
            </div>

            <figure class="img cell">
                <img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $img_alt ); ?>"/>
            </figure>
        </div>
        <p class="desc"><?php the_title(); ?></p>
    </div>
</a>