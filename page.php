<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Print_shop
 */

get_header(); ?>

	<section class="header-view"
					 style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
		<div class="header-view__container">
			<h2><?php the_title(); ?></h2>
			<style>
				.header-view {
					padding: 30px;
				}

				.header-view .header-view__container {
					padding: 30px 50px 40px;
				}

				.header-view .header-view__container h2 {
					padding-bottom: 15px;
					margin: 0;
				}
			</style>
		</div>
	</section>


	<div class="container">
		<div class="row">
			<div class="col-md-12 print-single-page">
				<?php
				while (have_posts()) : the_post();

					the_content();

				endwhile; // End of the loop.
				?>

			</div>
		</div>
	</div>

<?php
//get_sidebar();
get_footer();
