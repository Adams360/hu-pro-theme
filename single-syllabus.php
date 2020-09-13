<?php
/*
  Template Name: Syllabus Page
*/
?>

<?php 
get_header(); 
// Header Section
get_template_part( './includes/page-templates/syllabus/content', 'header' );

// Partners Section (global)
get_template_part( './includes/partial-templates/content', 'partners' );

// Syllabus Details Main Section 
get_template_part( './includes/page-templates/syllabus/content', 'details' );

// Target Section 
get_template_part( './includes/page-templates/syllabus/content', 'target' );

// Contact Section 
get_template_part( './includes/partial-templates/content', 'contact' );
?>

 
<?php get_footer(); ?>