<?php
/*
  Template Name: Home Page
*/
?>
<?php 
get_header(); 
// Header Section
get_template_part( './includes/page-templates/home/content', 'header' );

// Partners Section (global)
get_template_part( './includes/partial-templates/content', 'partners' );

// Experties Section 
get_template_part( './includes/page-templates/home/content', 'experties' );

// About Section 
get_template_part( './includes/page-templates/home/content', 'about' );

// Customers Section 
get_template_part( './includes/page-templates/home/content', 'customers' );

// Testimonials Section 
get_template_part( './includes/page-templates/home/content', 'testimonials' );

// Contact Section (global)
get_template_part( './includes/partial-templates/content', 'contact' );

?>
 
<?php get_footer(); ?>
