<?php get_header(); ?>

<div id="home-banner" class="home-banner">
        <div class="page-section">
            <div class="wrapper">
                <div class="row flex-center">
                    <div class="col col-sm-7">
                        <img class="home-banner__img" src="<?php echo get_template_directory_uri(); ?>/images/header.png" alt="">
                    </div>
                    <div class="col col-sm-5">
                        <h1 class="section-title--xlg">Pioneering Extraordinary Change</h1>
                        <h2 class="section-title--md section-title--brown section-title--italic">Through HR</h2>
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
            <div class="row">
                <div class="col col-md-6">
                    <div class="home-block home-block--consulting">
                        <div class="home-block__inner">
                            <h1 class="section-title">Consulting</h1>
                            <hr class="section-title__rule">
                                <ul class="home-block__content">
                                    <li>Organization Design and Development</li>
                                    <li>Human Resource Development</li>
                                    <li>Facilitation</li>
                                    <li>Succession Planning</li>
                                </ul>
                                <div class="center">
                                    <a href="#" class="btn btn--centered">Read More</a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <div class="home-block home-block--about">
                        <div class="home-block__inner">
                            <h1 class="section-title">About</h1>
                            <hr class="section-title__rule">
                            <p class="home-block__content">My goal is to help organizations design and implement effective HR strategies that value engagement and whole system approaches.</p>
                            <div class="center">
                                <a href="#" class="btn btn--centered">Read More</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            <div class="row">
                <div class="col col-md-6">
                    <div class="home-block home-block--sticky">
                        <div class="home-block__inner">
                            <h1 class="section-title">Sticky Situations</h1>
                            <hr class="section-title__rule">
                            <div class="home-block__video">
                                <img src="images/video-thumb.png" alt="Video Thumb">
                            </div>
                            <div class="home-block__video">
                                <img src="images/video-thumb.png" alt="Video Thumb">
                            </div>
                            <div class="center">
                                <a href="#" class="btn btn--centered">Read More</a>
                            </div>
                        </div>
                    </div>                        
                </div>
                <div class="col col-md-6">
                    <div class="home-block home-block--blog">
                        <div class="home-block__inner">
                            <h1 class="section-title">Recent Blog</h1>
                            <hr class="section-title__rule">
                            <ul class="home-block__content">
                                <li><a href="#">The Case for HR</a></li>
                                <li><a href="#">Blog Post #2</a></li>
                                <li><a href="#">Blog Post #3</a></li>
                                <li><a href="#">Blog Post #4</a></li>
                            </ul>
                            <div class="center">
                                <a href="#" class="btn btn--centered">Read More</a>
                            </div>
                        </div>
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
                                <button class="btn">Subscribe</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>