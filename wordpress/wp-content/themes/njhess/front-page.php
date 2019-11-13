<?php get_header(); ?>

<div id="home-banner" class="home-banner">
        <div class="page-section">
            <div class="wrapper">
                <div class="row flex-center">
                   
                    <div class="col col-sm-7">
                         <!-- 
                        <img class="home-banner__img" src="images/header.png" alt="">
                        -->
                    </div>
                     
                    <div class="col col-sm-5">
                        <h1 class="section-title--xlg section-title--white">Pioneering Extraordinary Change</h1>
                        <h2 class="section-title--md section-title--yellow section-title--italic">Through HR</h2>
                        <hr class="section-title__rule">
                        <div class="home-banner__social-icons">
                            <span class="home-banner__icon"><i class="fab fa-facebook-square"></i></span>
                            <span class="home-banner__icon"><i class="fab fa-linkedin"></i></span>
                            <span class="home-banner__icon"><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-blocks">
        <div class="wrapper">

        <div class="home-block--row">
    <?php
        $homepageBlocks = new WP_Query(array(
            'post_type' => 'home_blocks',
            'order_by' => 'sort',
            'order' => 'ASC'
        ));

        $homeBlogPosts = new WP_Query(array(
            'post_type' => 'post',
            'order_by' => 'sort',
            'posts_per_page' => 3,
            'order' => 'DESC'
        ));

        $homeStickySituations = new WP_Query(array(
            'post_type' => 'sticky_situations',
            'order_by' => 'sort',
            'posts_per_page' => 1,
            'order' => 'DESC'
        ));


        while($homepageBlocks->have_posts()) {

            $homepageBlocks->the_post();
            $homeBlockLink = get_field('hb_read_more_link');
            $contentType = "";
            ?>

                <div class="home-block--box">
                    <div class="home-block" style="background-image: url(<?php $homeBlockImage = get_field('hb_background_image'); echo $homeBlockImage['sizes']['homeBlock']; ?>)">
                        <div class="home-block__inner">
                            <h1 class="section-title"><?php the_title(); ?></h1>
                            <hr class="section-title__rule">
                            <div class="home-block__content">
                                <?php print get_the_content(); ?>
                                
                                <?php 
                                $contentType = get_field('content_type');
                                if ($contentType == 'post') {
                                    //show blog posts
                                    ?>
                                    <ul>
                                    <?php
                                    while($homeBlogPosts->have_posts()){
                                        $homeBlogPosts->the_post(); ?>
                                       <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php } ?>
                                    </ul>
                                    <?php
                                }

                                if ($contentType == 'sticky_situations') {
                                    //show sticky situations
                                    function grab_vimeo_thumbnail($vimeo_url){
                                        if( !$vimeo_url ) return false;
                                        $data = json_decode( file_get_contents( 'http://vimeo.com/api/oembed.json?url=' . $vimeo_url ) );
                                        if( !$data ) return false;
                                        return $data->thumbnail_url;
                                    }
                                    ?>
                                    <ul>
                                    <?php
                                    while($homeStickySituations->have_posts()){
                                        $homeStickySituations->the_post(); 
                                        $videoURL = get_field('video_url'); ?>
                                       <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                       <div><a href="<?php the_permalink(); ?>"><img src="<?php echo grab_vimeo_thumbnail($videoURL); ?>" alt="<?php the_title(); ?>"></a></div>
                                    <?php }                               
                                    ?>
                                    </ul>
                                    <?php
                                }
                                ?>
                            </div>
                            <div class="center home-block__button">
                                <a href="<?php print $homeBlockLink; ?>" class="btn btn--large btn--centered">Read More</a>
                            </div>
                        </div>
                    </div>  
                </div>

                
                
            <?php
   
        }
    ?>
    </div>

    </div>
    </div>


            
            
        </div>
    </div>
    <div id="newsletter" class="newsletter">
        <div class="page-section page-section--center">
            <div class="wrapper">
                <h1 class="section-title">Newsletter</h1>
                <p>Our occasional newsletter is a guide to the best resources, articles, and information on how HR can be a positave change agent for your organization</p>
                <div class="small-print small-print--italic">We will never share your email address and you can unsubscribe at anytime</div>
                <div class="form-wrapper">
                    <div class="form-wrapper__section">
                        <form class="form-wrapper__form validate-form" action="#" method="post">
                            <div class="form-wrapper__field-wrap validate-input  data-validate="Name is required">
                                <input class="form-wrapper__field" type="text" id="name" name="name" placeholder="Name">
                                <label class="form_label" for="name">
                                    <span class="lnr lnr-user"></span>
                                </label>
                            </div>
                            <div class="form-wrapper__field-wrap validate-input data-validate = "Valid email is required: ex@abc.xyz">
                                <input class="form-wrapper__field" type="text" id="email" name="email" placeholder="E-mail">
                                <label class="form_label" for="email">
                                    <span class="lnr lnr-user"></span>
                                </label>
                            </div>
                            <div class="form-wrapper__field-wrap">
                                <button class="btn btn--large">Subscribe</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>