<?php
/*
Template Name: Tour Stops
*/

get_header();

  $context = Timber::context();
  $context['post'] = new TimberPost();
  $context['language'] = get_bloginfo('language');

  Timber::render('page-tour.twig', $context);

get_footer();

?>
