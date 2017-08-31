<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Print_shop
 */

get_header(); ?>

  <section class="header-view" style="background-image: url(<?php if (function_exists('ot_get_option')) : ?>
    <?php echo ot_get_option('nf_image'); ?>
  <?php endif; ?>);">
    <div class="header-view__container">
      <h1>
        <?php if (function_exists('ot_get_option')) : ?>
          <?php echo ot_get_option('nf_text'); ?>
        <?php endif; ?>
      </h1>
      <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" target="_blank" class="cube-button">
        <div class="cube-wrapper">
          <div id="cube">
            <div class="side" id="side1"></div>
            <div class="side" id="side2"></div>
            <div class="side" id="side3"></div>
            <div class="side" id="side4"></div>
            <div class="side" id="side5"></div>
            <div class="side" id="side6"></div>
          </div>
        </div>
				<span>
					mehr
				</span>
      </a>
    </div>
  </section>


<?php
get_footer();
