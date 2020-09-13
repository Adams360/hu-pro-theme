<?php
/*
  Template Name: Courses Page
*/
?>
<?php 
get_header(); 

// Header Section
get_template_part( './includes/page-templates/courses/content', 'header' );

// Partners Section (global)
get_template_part( './includes/partial-templates/content', 'partners' );

// Experties Section 
get_template_part( './includes/partial-templates/content', 'text-strip' );

// About Section 
get_template_part( './includes/page-templates/courses/content', 'experties' );

// Customers Section 
get_template_part( './includes/page-templates/courses/content', 'quote' );

// Contact Strip Section (global)

?>
 
<?php get_footer(); ?>