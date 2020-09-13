<section class="contact" id="contact">
    <?php 
    
    if( is_single() ) {
        echo do_shortcode('[contact-form-7 id="716" title="Syllabus Page Form " html_class="form"]');
    } else {
        echo do_shortcode('[contact-form-7 id="764" title="Contact Form" html_class="form"]'); 
    }
    
    ?>


</section>