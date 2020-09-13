
<section class="experties" id="courses">
    <!-- Courses Coutner -->
            <div class="counter">
                <span class="counter__number">0</span> 
                <span class="counter__text">Courses Selected</span>
            </div>
        <div class="experties__container">
                <!-- Expertise Nav -->
                <nav class="expertise-nav">
                <div class="expertise-nav__head">
                    <h2 class="heading">
                            Areas of Experties
                    </h2>
                </div>
                
                    <ul class="expertise-nav__list">
                    <?php
                    $expertise = new WP_Query([
                        'posts_per_page' => -1,
                        'post_type'      => 'expertise',
                        [
                            'key'     => 'expertise_categories',
                            'compare' => 'LIKE',
                            'value'   => '"' . get_the_id() . '"'
                        ]
                    ]);
                    
                    $urlId = null;
                    if(isset($_GET['id'])){
                        $urlId = $_GET['id'];
                    } 
                    while( $expertise->have_posts()) {
                        $expertise->the_post();
                        ?>
                    
                   <li class="expertise-nav__item">
                    <button class="expertise-btn <?php if(get_the_ID() === intval($urlId)){?>expertise-btn--active<?php } ?>" data-for-expertise="<?= get_field("expertise_categories")[0]->post_name; ?>">
                                <span class="expertise-btn__text">
                                    <?= the_title(); ?>
                                </span>
                                <span class="expertise-btn__icon">
                                    <?php
                                    $expertise_icon = get_field('expertise_icon');
                                    
                                    if( !empty($expertise_icon) ): ?>
                                        <?=  file_get_contents($expertise_icon); ?>
                                    <?php endif; ?>
                                </span>
                            </button>
                        </li>
                    <?php } wp_reset_postdata();?>
                </ul>

                    <a href="<?= get_field('full_courses_index');?>" download class="btn btn--sm btn--orange"> Download Full Course Index </a>
                </nav>
                <!-- END Expertise Nav -->
                <!-- Expertise Menu START -->
                <div class="expertise-menu">

                <?php
                    
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type'      => 'syllabus',
                        array(
                            'key'     => 'related_expertise',
                            'compare' => 'LIKE',
                            'value'   => '"' . get_the_id() . '"'
                        )
                    );
        
                    $syllabus = new WP_Query($args);
                    if($syllabus->have_posts()) {
                        while( $syllabus->have_posts()) {
                                    $syllabus->the_post(); 
                        ?>
                        <div class="expertise-menu__box" data-expertise="<?= get_field("related_expertise")[0]->post_name; ?>">
                            <input type="checkbox" class="expertise-menu__input" 
                            name="<?= get_field("related_expertise")[0]->post_name; ?>" id="<?= get_the_id(); ?>">
                            <label for="<?= get_the_id(); ?>" class="expertise-menu__label">
                                <span class="svg-box">
                                <svg viewBox="0 0 100 100">
                                    <path class="svg-rect" d="M82,89H18c-3.87,0-7-3.13-7-7V18c0-3.87,3.13-7,7-7h64c3.87,0,7,3.13,7,7v64C89,85.87,85.87,89,82,89z"/>
                                    <polyline class="svg-check" points="25.5,53.5 39.5,67.5 72.5,34.5 "/>
                                </svg>
                                </span>
                
                                <a href="<?= get_the_permalink(); ?>" class="expertise-menu__link">
                                    <span class="expertise-menu__text"><?= get_the_title(); ?></span>
                                    <span class="expertise-menu__text expertise-menu__text--sub"><?= get_field('syllabus_code'); ?></span>
                                </a>
                                <span class="expertise-menu__arrow">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-right"
                                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </span>
                            </label>
                        </div>
                    <?php } wp_reset_postdata() ?>
                <?php } ?>
                </div>
                <!-- Expertise Menu END -->
        </div>
    </section>