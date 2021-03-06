<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

<div class="row">
	
	<!-- Centered article, no sidebar. -->
	<!-- ><div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2"> -->
		
	<!-- Left article, right sidebar. -->
	<div class="col-xs-12 col-md-9">
	
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php _tk_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'index' ); ?>

		<?php endif; ?>

	</div>
	
	<div class="col-xs-12 col-md-3">
		
		<?php get_sidebar("blog"); ?>
		
	</div>
	
</div><!-- .row -->

<?php get_footer(); ?>