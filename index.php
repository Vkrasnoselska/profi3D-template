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
 * @package Print_shop
 */

get_header(); ?>

<?php if (function_exists('ot_get_option')) : ?>
<section class="header-view"
         style="background-image: url(<?php if (function_exists('ot_get_option')) : ?>
           <?php echo ot_get_option('hp_fs_image'); ?>
         <?php endif; ?>);">
  <div class="header-view__container">
    <h2>
      <?php if (function_exists('ot_get_option')) : ?>
        <?php echo ot_get_option('hp_fs_text'); ?>
      <?php endif; ?>
    </h2>

    <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" class="cube-button-xs-show">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube-2.png" alt="Cube image" width="50px"><span> <?php echo ot_get_option('trl_hm_learn_more'); ?><br/><?php echo ot_get_option('trl_hm_about_product'); ?> </span>
    </a>
   <!-- <a href="<?php echo get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>" class="cube-button">
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
					<?php echo ot_get_option('trl_hm_learn_more'); ?><br/><?php echo ot_get_option('trl_hm_about_product'); ?>
				</span>
    </a>-->

  </div>
</section>
<?php endif; ?>

<?php if (function_exists('ot_get_option')) : ?>
  <section class="change-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h2 class="common-title">
            <span><?php echo ot_get_option('trl_hm_product'); ?></span>
            <span><?php echo ot_get_option('trl_hm_innovation'); ?>
            <br/><?php echo ot_get_option('trl_hm_credibility'); ?>
            <br/><?php echo ot_get_option('trl_hm_value'); ?></span>
          </h2>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="owl-carousel">
            <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'cat' => 102
              );
              ?>
              <?php $post_query = new WP_Query($args); ?>
              <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <div>
                  <div class="slide-flex">
                    <div class="slide-image">
                      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                      <span class="border-opacity"></span>
                      <span class="slider-opacity"></span>
                    </div>
                    <div class="slider-context">
                      <h1>
                        <?php the_title(); ?>
                      </h1>
                      <?php the_excerpt(); ?>
                      <a class="change-link" href="<?php echo wp_get_shortlink(); ?>"><?php echo ot_get_option('trl_hm_read_more'); ?></a>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?>
              <?php wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>

<section class="hover-bord">
  <div class="hb-container">
    <h2 class="common-title">
      <span><?php echo ot_get_option('trl_hm_product'); ?></span>
      <span><?php echo ot_get_option('trl_hm_innovation'); ?>
      <br/><?php echo ot_get_option('trl_hm_credibility'); ?>
      <br/><?php echo ot_get_option('trl_hm_value'); ?></span>
    </h2>
  </div>
  <?php if (function_exists('ot_get_option')) : ?>
    <?php $gr_cat_sections = ot_get_option('group_category_section'); ?>
    <?php foreach ($gr_cat_sections as $kay => $gr_cat_section) : ?>
      <div class="hover__box <?php echo ($kay + 1) % 2 ? '' : 'hb-reverse'; ?>">
        <div class="hd-sec hd-1">
          <img src="<?php echo $gr_cat_section['image']; ?>" alt="Category image" width="100%">
          <a href="<?php echo get_term_link((int)$gr_cat_section['group_category_page'], 'product_cat'); ?>">
            <span> <?php echo $gr_cat_section['title']; ?> <b>ansehen</b></span>
          </a>
        </div>
        <div class="hd-sec hd-2">
          <div class="hd-content">
            <h2><?php echo $gr_cat_section['sub_title']; ?></h2>
            <p>
              <?php echo $gr_cat_section['description']; ?>
            </p>

            <a href="<?php echo get_term_link((int)$gr_cat_section['group_category_page'], 'product_cat'); ?>" class="cube-button-xs-show-black">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cube.png" alt="Cube image" width="50px"><span> <?php echo ot_get_option('trl_hm_see_all'); ?><br/><?php echo ot_get_option('trl_hm_category'); ?> </span>
            </a>
            <a href="<?php echo get_term_link((int)$gr_cat_section['group_category_page'], 'product_cat'); ?>"
               class="cube-button-black">
              <div class="cube-wrapper-black">
                <div id="cube-black">
                  <div class="side-black" id="side1"></div>
                  <div class="side-black" id="side2"></div>
                  <div class="side-black" id="side3"></div>
                  <div class="side-black" id="side4"></div>
                  <div class="side-black" id="side5"></div>
                  <div class="side-black" id="side6"></div>
                </div>
              </div>
						<span>
							<?php echo ot_get_option('trl_hm_see_all'); ?><br/><?php echo ot_get_option('trl_hm_category'); ?>
						</span>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  <?php endif; ?>
</section>

<?php if (function_exists('ot_get_option')) : ?>
  <section class="tab-container">
    <div class="wrapper">
      <h2 class="common-title">
        <span><?php echo ot_get_option('trl_hm_product'); ?></span>
        <span><?php echo ot_get_option('trl_hm_innovation'); ?>
        <br/><?php echo ot_get_option('trl_hm_credibility'); ?>
        <br/><?php echo ot_get_option('trl_hm_value'); ?></span>
      </h2>
      <?php $tabs = ot_get_option('hp_tabs'); ?>
      <div class="tabs">
        <?php foreach ($tabs as $tab) : ?>
          <span class="tab">
					<img src="<?php echo $tab['hp_tb_image']; ?>" alt="">
          <p><?php echo $tab['hp_tb_image_title']; ?></p>
			  </span>
        <?php endforeach; ?>
      </div>
      <div class="tab_content">
        <?php foreach ($tabs as $tab) : ?>
          <div class="tab_item">
            <h3>
              <?php echo $tab['title']; ?>
            </h3>
            <?php echo $tab['hp_tb_text']; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
