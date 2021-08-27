<?php
/*
Template Name: Installation
*/

get_header();

$context = Timber::context();
$context['post'] = new TimberPost();
$context['language'] = get_bloginfo('language');

Timber::render('page-installation.twig', $context);

get_footer();

?>
