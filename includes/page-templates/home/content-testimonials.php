<?php
    $testimonials = get_field('testimonials');
?>

<section class="testimonials">

<div class="testimonials__graphic">
    <img src="<?php echo get_template_directory_uri() ;?>/dist/assets/img/global/testimonials/quote.svg" alt="">
</div>

<?php if($testimonials): ?>
<div class="swiper-container testimonials-slider">
    <div class="swiper-wrapper">
    <?php foreach($testimonials as $testimonial): ?>
        <?php if( !empty($testimonial['logo']) ): ?>
        <!-- Testimonial #1 -->
        <div class="swiper-slide testimonials-slider__slide">
            <div class="testimonials-slider__img">
                <img src="<?= $testimonial['logo']; ?>" alt="">
            </div>
            <p class="testimonials-slider__text">
            <?= $testimonial['text']; ?>
            </p>
            <div class="testimonials-slider__profile">
                <p class="name"><?= $testimonial['name']; ?></p>
                <p class="role"><?= $testimonial['role']; ?></p>
                <p class="company"><?= $testimonial['company']; ?></p>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div class="swiper-pagination" id="testimonials-pagination"></div>
</div>
<?php endif; ?>
</section>