<?php get_header(); ?>
  <?php while(have_posts()) {
    the_post(); ?>

    <div id="page-banner" class="page-banner">
      <div class="page-section">
        <div class="wrapper">
          <h1 class="section-title--md section-title--white"><?php the_title(); ?></h1>
        </div>
      </div>
      <div class="banner-breadcrumb">
        <div class="banner-breadcrumb__inner wrapper">
          <div class="banner-breadcrumb__btn">
            <a href="#" class="banner-breadcrumb__link"><i class="fas fa-home"></i></a>
          </div>
          <div class="banner-breadcrumb__divider"><img src="images/breadcrumb-seperator.png" alt=""></div>
        </div>
      </div>
    </div>

    <div class="page-section">
      <div class="wrapper">

          <div class="page-content">
            <?php the_content();  ?>
          </div>
          
      </div>
    </div>
    
  <?php } ?>
  
<?php get_footer(); ?>