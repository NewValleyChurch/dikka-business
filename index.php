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
 * @package Dikka Business
 */

get_header(); ?>
	
<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if (current_user_can("access_s2member_level1")){ ?>
			<div class="blog-archive-wrapper">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php
				/**
				* Hook - dikka_business_action_posts_navigation.
				*
				* @hooked: dikka_business_custom_posts_navigation - 10
				*/
				do_action( 'dikka_business_action_posts_navigation' ); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>
			</div><!-- .blog-archive-wrapper -->
            <?php } else { ?>
    The New Valley Resources website is a repository of information designed for Staff and Volunteers at New Valley Church.  If this is you, please <a href="https://newvalleyresources.com/wp-login.php?action=register">register</a> or <a href="https://newvalleyresources.com/wp-login.php">login</a> to access the resources.
<?php } ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php if (current_user_can("access_s2member_level1")){ ?>
	<?php
		/**
		 * Hook - dikka_business_action_sidebar.
		 *
		 * @hooked: dikka_business_add_sidebar - 10
		 */
		do_action( 'dikka_business_action_sidebar' );
	?>
<? php } else {  ?>
<?php } ?>

</div><!-- .container -->

<?php get_footer(); ?>
