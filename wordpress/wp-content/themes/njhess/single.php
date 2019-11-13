<?php get_header(); ?>
  <?php while(have_posts()) {
    the_post(); ?>

    <div id="home-banner" class="home-banner">
      <div class="page-section">
        <div class="wrapper">
          <h1 class="section-title--md section-title--white"><?php the_title(); ?></h1>
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