<?php get_header(); ?>
  <div id="home-banner" class="home-banner">
    <div class="page-section">
      <div class="wrapper">
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>

  <div class="home-blocks">
    <div class="wrapper">
      <div class="row">
        <div class="col col-md-8">
          <?php
            while(have_posts()) {
              the_post();
              the_content();
            }
          ?>
        </div>
        <div class="col col-md-4">

        </div>
      </div> 
    </div>
  </div>
<?php get_footer(); ?>