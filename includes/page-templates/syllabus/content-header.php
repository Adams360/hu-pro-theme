<?php
    $expertise = get_field( 'related_expertise' )[0];
    if ($expertise && !empty($expertise)) {
        $exp_bg = get_field('expertise_img', $expertise->ID);

    }

$_POST['interested_syllabus'] = get_field('syllabus_code');

?>

<style>
    .syllabus-header {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-image: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent), 
        url( <?php echo $exp_bg; ?>  ) !important;
    }
</style>




<header class="syllabus-header">

<div class="syllabus-header__text">
    <h1 class="big-heading white"> 
        <?= the_title() ?>    
    </h1>
    <div class="syllabus-header__content">
        <p> <?= get_field('syllabus_code'); ?> </p>
        <hr class="divider" />
        <p> <?= get_field('syllabus_duration'); ?> </p>
    </div>
</div>

<div class="syllabus-header__btns">
    <a href="<?= get_field('syllabus_pdf'); ?>" download class="syllabus-header__btn syllabus-header__btn--full">Download Full Syllabus</a>
    <a href="#contact" class="syllabus-header__btn syllabus-header__btn--ghost">Request a Quote</a>
</div>
    <span class="syllabus-header__sticker">
         All Our Courses Now Also LIVE
    </span>

</header>