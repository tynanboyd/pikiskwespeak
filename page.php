<?php

get_header();

$context = Timber::context();
$context['post'] = new TimberPost();

Timber::render('page-templates/views/page.twig', $context);  

get_footer();

?>
