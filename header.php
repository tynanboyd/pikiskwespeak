<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<script src="https://use.typekit.net/shx2ckq.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

		<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/favicon.png">

		<!--open graph-->
		<meta property="og:title" content="<?php echo bloginfo('name'); ?>" />
		<meta property="og:site_name" content="<?php echo bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php echo bloginfo('description'); ?>" />
		<meta property="og:type" content="website" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:image" content="<?php the_field('open_graph_image', 'option'); ?>" />
		<meta property="og:image:width" content="558" />
		<meta property="og:image:height" content="558" />

		<meta name="twitter:title" content="<?php echo bloginfo('name'); ?>" />
		<meta name="twitter:description" content="<<?php echo bloginfo('description'); ?>" />
		<meta name="twitter:card" content="An Art & Film Installation An Invitation to Conversations in Reconciliation" />
		<meta name="twitter:url" content="https://pikiskwe-speak.ca" />
		<meta name="twitter:site" content="pikiskwe-speak" />
		<meta name="twitter:creator" content="pikiskwe-speak" />

		<style type="text/css">
			.site-header{padding:2em 0}.site-logo{background-color:#7d312b;color:#fcfbf7;padding:1em;font-size:0.875em;line-height:0;transition:all 0.2s ease}.site-logo:hover{color:#fcfbf7;background-color:#6a2a24}.main-nav{text-transform:uppercase}.main-nav a{color:#0a0a0a;transition:all 0.2s ease;font-size:15px;padding:0.7rem;letter-spacing:0.2px}.main-nav a:hover{color:#7d312b}.dropdown.menu .is-active>a{color:#7d312b;background-color:transparent}.social-links{color:#7d312b;font-size:16px}.social-links a{color:#7d312b;padding:0.7rem 0.5rem}#menu-trigger{color:#7d312b;font-size:30px}.off-canvas.is-transition-overlap.is-open{background:rgba(255,255,255,0.9)}.off-canvas{height:80vw}.off-canvas .menu{margin-top:3em}.off-canvas .menu .is-active>a{background-color:#7d312b}.hero-image{width:100%}.artist-statement h2{text-transform:uppercase;color:#7d312b}
		</style>

		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<?php
    $context = Timber::context();
    $context['language'] = get_bloginfo('language');
    Timber::render('page-templates/views/header.twig', $context);
?>