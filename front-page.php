<?php

get_header();

  $context = Timber::context();
  $context['post'] = new TimberPost();
  $context['currentLang'] = get_bloginfo('language');

  Timber::render('page-templates/views/front.twig', $context);

get_footer();

?>
