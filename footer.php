<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Print_shop
 */
?>

<div class="function-container">
  <div class="align-function-elements">
    <?php if (!is_account_page()) : ?>
      <div>
        <a class="hide-login" href="<?php echo get_site_url(); ?>/my-account"><span
            class="rotate-func"><?php echo is_user_logged_in() ? '<b style="top:-15px;">' . ot_get_option('trl_side_account') . '</b>' : '<b>' . ot_get_option('trl_side_login') . '</b>'; ?></b></span><i
            class="fa fa-user"></i></a>
      </div>
    <?php endif; ?>
    <div>
      <button class="hide-phone"><span class="rotate-func"><b><?php echo ot_get_option('trl_side_phone'); ?></b></span><i class="fa fa-phone"></i></button>
    </div>
    <div>
      <button class="hide-search"><span class="rotate-func"><b><?php echo ot_get_option('trl_side_search'); ?></b></span><i class="fa fa-search"></i></button>
    </div>
    <?php $count = WC()->cart->get_cart_contents_count(); ?>
    <div>
      <button class="hide-cart cart-count-side">
        <span><?php echo $count == 0 ? '<span class="rotate-func"><b>' . ot_get_option('trl_side_cart') . '</b></span>' : $count; ?></span><i
          class="fa fa-shopping-cart"></i></button>
    </div>
    <div><a href="#body-top"><span class="rotate-func"><b><?php echo ot_get_option('trl_side_to_top'); ?></b></span><i class="fa fa-angle-double-up"></i></a>
    </div>
    <?php if (is_shop() || is_product_category() || is_product_tag()) : ?>
      <div>
        <button class="hide-filter"><span class="rotate-func"><b><?php echo ot_get_option('trl_side_filter'); ?></b></span><i class="fa fa-filter"></i></button>
      </div>
    <?php endif; ?>
  </div>
</div>

</article>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-1">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-white.png" alt="Logo">
        <p>
          <?php if (function_exists('ot_get_option')) : ?>
            <?php echo ot_get_option('first_column_text'); ?>
          <?php endif; ?>
        </p>
        <form role="search" method="get" class="woocommerce-product-search"
              action="<?php echo esc_url(home_url('/')); ?>">
          <input type="search" id="woocommerce-product-search-field" class="search-field"
                 placeholder="<?php echo esc_attr_x('Suche', 'placeholder', 'woocommerce'); ?>"
                 name="s"
                 title="<?php echo esc_attr_x('Search for:', 'label', 'woocommerce'); ?>"/>
          <input type="submit" value="<?php echo esc_attr_x('Suche', 'submit button', 'woocommerce'); ?>"/>
          <input type="hidden" name="post_type" value="product"/>
        </form>
      </div>

      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer_common footer-2">
        <h3>
          <?php if (function_exists('ot_get_option')) : ?>
            <?php echo ot_get_option('subsctibe_to_news_title'); ?>
          <?php endif; ?>
        </h3>
        <?php if (is_active_sidebar('footer_second_col')) : ?>
          <?php dynamic_sidebar('footer_second_col'); ?>
        <?php endif; ?>
        <p>
          <?php if (function_exists('ot_get_option')) : ?>
            <?php echo ot_get_option('subsctibe_to_news_text'); ?>
          <?php endif; ?>
        </p>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer_common footer-3">
        <h3>
          <?php if (function_exists('ot_get_option')) : ?>
            <?php echo ot_get_option('third_section_title'); ?>
          <?php endif; ?>
        </h3>

        <?php
        if (('footer') && ($locations = get_nav_menu_locations()) && isset($locations['footer'])) {
          $menu = get_term($locations['footer'], 'nav_menu');
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          $menu_list = '<ul>' . "\n";
          foreach ($menu_items as $key => $menu_item) {
            $menu_list .= '<li>' . "\n";
            $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' . "\n";
            $menu_list .= '</li>' . "\n";
          }
          $menu_list .= '</ul>' . "\n";
        } else {
          $menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
        }
        echo $menu_list;
        ?>

      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer_common footer-4">
        <?php if (function_exists('ot_get_option')) : ?>
          <?php $phone_numbers = ot_get_option('phone_number'); ?>
          <h3>
            <?php if (function_exists('ot_get_option')) : ?>
              <?php echo ot_get_option('contact_us_title'); ?>
            <?php endif; ?>
          </h3>
          <p>
            <?php if (function_exists('ot_get_option')) : ?>
              <?php echo ot_get_option('contact_us_text'); ?>
            <?php endif; ?>
          </p>
          <ul>
            <?php foreach ($phone_numbers as $phone_number) : ?>
             <li><a href="tel:<?php echo $phone_number['number']; ?>"><?php echo $phone_number['number']; ?></a></li>
            <?php endforeach; ?>
          </ul>

          <?php $email = ot_get_option('e_mail'); ?>
          <a class="foot-email" href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>

          <?php $social_icons = ot_get_option('social_icons'); ?>
          <div class="foot-social">
            <?php foreach ($social_icons as $social_icon) : ?>
              <a href="<?php echo $social_icon['link']; ?>"><span><i class="fa <?php echo $social_icon['icon']; ?>"></i></span></a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</footer>

<style>
.footer-4 ul li a{color: #fff;}
</style>

<?php wp_footer(); ?>

<script>
	
  function loadCSS(hf) {
    var ms = document.createElement("link");
    ms.rel = "stylesheet";
    ms.href = hf;
    document.getElementsByTagName("head")[0].appendChild(ms);
  }
  loadCSS("<?php echo get_template_directory_uri(); ?>/assets/libs/font-awesome/css/font-awesome.min.css");
  loadCSS("<?php echo get_template_directory_uri(); ?>/assets/css/sf.min.css");
  loadCSS("<?php echo get_template_directory_uri(); ?>/assets/css/_header.min.css");
  loadCSS("<?php echo get_template_directory_uri(); ?>/assets/css/_main.min.css");

</script>

<?php
/*global $wp_scripts;
echo "<pre>";
var_dump($wp_scripts);
echo "</pre>";
*/?>

</body>
</html>
