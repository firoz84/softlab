<?php 

/*
Template Name: Homepage
*/
    get_header();
?>

    <!-- Hero Section Start -->
    <?php  get_template_part('template-parts/content','hero'); ?>
    <!-- Hero Section End -->

    <!-- Product section start -->
    <?php  get_template_part('template-parts/content','product'); ?>
    <!-- Product section end -->

    <!-- About section Start -->
    <?php  get_template_part('template-parts/content','about'); ?>
    <!-- About section End -->

    <!-- service section start -->
    <?php  get_template_part('template-parts/content','service'); ?>
    <!-- service section end -->

    <!-- Testimonial section start -->
    <?php  get_template_part('template-parts/content','testimonial'); ?>
    <!-- Testimonial section end -->

    <!-- Funfact section start -->
    <?php  get_template_part('template-parts/content','fant'); ?>
    <!-- Funfact section End -->

    <!-- Call to Action section start -->
    <?php  get_template_part('template-parts/content','ctp'); ?>
    <!-- Call to Action section end -->

    <!-- Blog section start -->
    <?php  get_template_part('template-parts/content','blog'); ?>
    <!-- Blog section end -->

  <?php get_footer();?>