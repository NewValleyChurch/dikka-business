<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Dikka Business
 */

get_header(); ?>

<div class="container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'You might need to', 'dikka-business' ); ?> <a href="https://newvalleyresources.com/wp-login.php">Login</a> before clicking that link in your email.</h1>
				</header><!-- .page-header -->

				<div class="page-content">

					<p><?php esc_html_e( '...or the content is in fact missing.', 'dikka-business' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .container -->

<?php get_footer(); ?>
