<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="banner background-cream margin-bottom">

<div class="row columns">	

	<?php 
	if (get_field('page_title_override')) {
		$title = get_field('page_title_override');
	} else {
		$title = get_the_title();
	} 
	 ?>

    <h1><?php echo $title; ?></h1>
	
</div>

</div>

<div class="main-wrap">
	<main class="main-content">
	<?php if ( have_posts() ) : ?>
		<div class="row">
			<div class="small-12 medium-9 columns">

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php
		if ( function_exists( 'foundationpress_pagination' ) ) :
			foundationpress_pagination();
		elseif ( is_paged() ) :
		?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php endif; ?>
	</div>
	<div class="small-12 medium-3 columns">
		<?php get_sidebar(); ?>
	</div>
	</div>

	</main>
	

</div>

<?php get_footer();
