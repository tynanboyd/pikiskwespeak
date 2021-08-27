<?php
/*
Template Name: Two Columns
*/

get_header();

  $context = Timber::context();
  $context['post'] = new TimberPost();

  Timber::render('page-two-columns.twig', $context);

get_footer();

?>
