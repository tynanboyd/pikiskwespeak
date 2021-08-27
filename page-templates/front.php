<?php
/*
Template Name: Front
*/

get_header();

  $context = Timber::get_context();
  $context['post'] = new TimberPost();
  $context['currentLang'] = get_bloginfo('language');

  Timber::render('front.twig', $context);

get_footer();

?>
