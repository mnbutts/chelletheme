<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package chelletheme
 */

get_header(); ?>
		<div class="clearfix">
			<section class="main">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
				<a href="<?php the_permalink(); ?>"><h1><?php the_title_attribute(); ?></h1></a>
				<?php the_content(); ?>
					<!--  <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
					<p>We also make pancakes on the side.</p> -->
			</section>
		<?php endwhile; else :?>
			<p><?php _e('Sorry, no content'); ?></p>
		<?php endif; ?>
		</section>
		<?php get_sidebar(); ?>
		</div>
		

<?php get_footer(); ?>