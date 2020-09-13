<?php get_header(); ?>


<div class="container">
    
<main class="search-wrapper">



<?php if(have_posts()): ?>
    <div class="search__results">

    <?php
        global $post;
               $search_posts = new WP_Query(array(
                    'post_type'      => 'syllabus',
                    's'              => get_search_query()
                ));

            foreach($search_posts->posts as $search_post):
                $post = $search_post;

            

                $expertise = get_field( 'related_expertise' )[0];
      
                if ($expertise && !empty($expertise)) {
                    $exp_bg = get_field('expertise_img', $expertise->ID);
                }

        ?>
        


            <a href="<?php echo get_the_permalink(); ?>" class="result-card">
                    <div class="result-card__content">
                        <h2> <?php echo get_the_title(); ?> </h2>
                        <button>Learn More</button>
                    </div>
                    <div class="result-card__img">
                            <img src="<?php echo $exp_bg; ?>"> 
                    </div>
                </a> <!-- END OF SEARCH RESULT CARD-->
     <?php
        endforeach;
        wp_reset_postdata();
        ?>

<?php else: ?>

<div class="no-results">
    <h2><?php _e('No results matching your query were found', 'selina'); ?></h2>
    <span><?php _e('Maybe try searching something else?', 'selina'); ?></span>
</div>

    </div> <!-- END OF SEARCH RESULTS DIV-->
<?php endif; ?>
</main>
</div>

 
<?php get_footer(); ?>