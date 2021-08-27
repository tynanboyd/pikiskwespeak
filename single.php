<?php

get_header();

  $context = Timber::get_context();
  $context['post'] = new TimberPost();

  Timber::render('page-templates/views/single.twig', $context);  

get_footer();

?>
