<?php
    $icons = get_field('icons');
?>


<section class="home-experties">

<h2 class="heading"> Areas of Experties </h2>

<div class="icons">

<?php
    $expertise = new WP_Query([
        'posts_per_page' => -1,
        'post_type'    => 'expertise',
    ]);

    while($expertise->have_posts()) {
 
        $expertise->the_post(); ?>
        <a href="<?php echo home_url('siteurl'); ?>/<?= get_page_uri( $page = 472 ); ?>/?id=<?php echo the_ID() ?>" class="icons__box">
        <!-- svg goes here -->
        <?php
        $expertise_icon = get_field('expertise_icon');
        if( !empty($expertise_icon) ): ?>
            <?php echo file_get_contents($expertise_icon); ?>
        <?php endif; ?>
        <span class="icons__text">
            <?= the_title(); ?>
        </span>
    </a>
    <?php 
    wp_reset_query();    
    }
?>


</div>
</section>