<?php get_header(); ?>

  <div id="blog-banner" class="blog-banner">
    <div class="page-section">
      <div class="wrapper">
        <h1 class="section-title--md section-title--white">Welcome to our Blog!</h1>
      </div>
    </div>
  </div>

  <div class="page-section">
    <div class="wrapper">
      <?php
      while(have_posts()) {
        the_post(); ?>
        
        <div class="post-item">
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="post-item--excerpt"><?php the_excerpt(); ?></div>
          <div class="home-block__button">
              <a href="<?php the_permalink(); ?>" class="btn btn--small">Continue Reading <i class="fas fa-forward"></i></a>
          </div>
        </div>

      <?php } ?>
      <div class="paginate-links"><?php echo paginate_links(); ?></div>
    </div>
  </div>

  
<?php get_footer(); ?>