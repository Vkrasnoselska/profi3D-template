<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Print_shop
 */

get_header(); ?>

	<section class="header-view" style="background-image: url(<?php if (function_exists('ot_get_option')) : ?>
		<?php echo ot_get_option('sbp_fs_image'); ?>
	<?php endif; ?>);">
		<div class="header-view__container">
			<h2>
				<?php if (function_exists('ot_get_option')) : ?>
					<?php echo ot_get_option('sbp_fs_text'); ?>
				<?php endif; ?>
			</h2>
			<style>
				.header-view{
					padding: 30px;
				}
				.header-view .header-view__container{
					padding: 30px 50px 40px;
				}
				.header-view .header-view__container h2{
					padding-bottom: 15px;
					margin: 0;
				}
			</style>
		</div>
	</section>

		<?php
		while ( have_posts() ) : the_post(); ?>

			<section class="blog-inner-section">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-inner-box">
							<h1><?php the_title(); ?></h1>
							<!--	<img src="--><?php //the_post_thumbnail_url(); ?><!--" alt="Inner-blog"> -->
							<?php the_post_thumbnail('archive-blog-image'); ?>

							<?php the_content(); ?>

							<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>
							
						</div>
					</div>
				</div>
			</section>




			<!-- the_post_navigation();

			 If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; -->

	<?php	endwhile; // End of the loop.
		?>


<?php
get_footer();
