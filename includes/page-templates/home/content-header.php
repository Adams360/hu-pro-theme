<header class="home-header" id="home">

<span class="sticker">
    <p> <?= get_field( 'header_msg' ); ?> </p>
</span>

<div class="swiper-container header-slider">
    <div class="swiper-wrapper">

<?php 
    $slides = get_field('slides'); 

    if( $slides ): ?>


    <?php foreach( $slides as $slide ): ?>
        <!-- SLIDE #1 -->
        <div class="swiper-slide header-slider__slide">
            <div class="header-slider__img">
                <img class="img-desktop" src="<?= $slide['image_desktop']; ?>" alt="">
                <img class="img-mobile" src="<?= $slide['image_mobile']; ?>" alt="">
            </div>

            <div class="header-slider__content">
                <h2 class="big-heading">
                    <?= $slide['big_text']; ?>
                    <span class="big-heading--sub"> <?= $slide['small_text']; ?></span>
                </h2>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
        
    <!-- Slides's Pagination -->
    <div class="swiper-pagination" id="header-pagination"></div>
</div>
</header>