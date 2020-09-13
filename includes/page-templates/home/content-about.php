<?php
    $home_about_para                = get_field('home_about_para');
    $home_about_img_desktop         = get_field('about_img_desktop');
    $home_about_img_mobile          = get_field('about_img_mobile');
    $home_about_big_text            = get_field('home_about_big_text');
?>

<section class="home-about" id="about">
        <div class="home-about__top">
            <img class="home-about__img" src="<?= $home_about_img_desktop; ?>" alt="">
            <img class="home-about__img--mobile" src="<?= $home_about_img_mobile; ?>" alt="">
            <div class="home-about__content">
                <h2 class="heading">About Us</h2>
                <p class="lead">
                    <?= $home_about_para; ?>
                </p>
            </div>
        </div>
        <div class="text-strip text-strip--wide">
            <div class="text-strip__container">
            <p class="lead lead--lg">
                   <?= $home_about_big_text; ?>
                </p>
            </div>
       
        </div>
    </section>