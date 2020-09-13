<section class="quote" id="contact">
        <div class="container">
            <div class="quote__inner">

                <!-- HEADING -->
                <div class="quote__heading">
                    <h2 class="heading">Reuqest a Quote</h2>
                </div>
                <!-- CONTENT -->
                <div class="quote__content">
                    <p class="lead">
                         <?= get_field('contact_text');?>
                    </p>
                </div>

                <!-- FORM -->

                <div class="quote__form">
                       <?php echo do_shortcode('[contact-form-7 id="715" title="Courses Page Form"]'); ?>

                       
           

                </div>

                <!-- SELECTION -->
                <div class="quote__selection">
                    <p class="text">Your Selected Courses:</p>
                    <p class="text--empty">
                            <?= get_field('selected_courses_text');?>
                    </p>
                    <ul class="quote__selection__list" id="selected___courses">
                    </ul>
                </div>
            </div>

        </div>
    </section>