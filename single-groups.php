<?php get_header(); ?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) : the_post(); ?>
    <section class="header-view" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/header-bg/home-bg3.jpg);">
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

    <section class="hover-bord inner-cat">
      <div class="hb-container">
        <h2 class="common-title">
          <span>Product</span>
          <span>Innovation.<br/>Credibility.<br/>Value.</span>
        </h2>
      </div>
      <div class="hover__box">
        <div class="hd-sec hd-1">
<!--          <img src="img/home-bg.jpg" alt="Category image" width="100%">-->
          <?php the_post_thumbnail('full', array('class' => 'group_cat_img')); ?>
          <a href="#" style="opacity:1!important">
            <span><?php the_title(); ?></span>
          </a>
        </div>
        <div class="hd-sec hd-2">
          <div class="hd-content">
            <?php foreach(get_field('category') as $category) : ?>
            <a href="<?php echo get_term_link( $category->term_id, 'product_cat' ); ?>"><span><i class="fa fa-angle-right"></i></span><?php echo $category->name; ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </section>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
