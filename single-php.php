<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>


	<div class="banner background-cream margin-bottom">
		<div class="row columns">			
				<h1><?php echo the_title(); ?></h1>
		</div>
	</div>


<section class="main-content clearfix">
	<div class="row columns">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', '' ); ?>
		<?php endwhile;?>
	</div>		
</section>

<?php if (get_the_id() == 141 || get_the_id() == 402): ?>
	<section class="conversation__comments">
		<div class="row columns">		
			<div class="row columns">
				<?php comments_template(); ?>
			</div>
			
		</div>
	</section>
<?php endif; ?>

<?php get_footer();
