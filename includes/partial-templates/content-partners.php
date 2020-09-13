<section class="partners">
    <div class="partners__container">
         <?php
            $partners_logos = new WP_Query([
                'posts_per_page' => -1,
                'post_type'      => 'partners'
            ]);
            
            while( $partners_logos->have_posts() ) { 
                $partners_logos->the_post(); ?>
                <div class="partners__logo">
                        <img src="<?= get_field('partner_logo'); ?>" alt="Logo Asset">
                </div>
           <?php wp_reset_query(); 
                
           } ?>
    </div>
</section>