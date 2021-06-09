<?php
    /*
        * Template Name: Launcher Template
    */
    get_header(); 
?>
<div class="fh5co-loader"></div>

<aside id="fh5co-aside" role="sidebar" class="text-center" style="background-image: url(<?php echo get_template_directory_uri(  ) ?>/assets/images/img_bg_1_gradient.jpg);">
    <h1 id="fh5co-logo"><a href="<?php echo site_url(); ?>"><?php bloginfo( "name" ); ?></a></h1>
</aside>

<div id="fh5co-main-content">
    <div class="dt js-dt">
        <div class="dtc js-dtc">
            <div class="simply-countdown-one animate-box" data-animate-effect="fadeInUp"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="fh5co-intro animate-box">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-7 animate-box">
                            <form action="#" id="fh5co-subscribe">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter your email">
                                    <input type="submit" value="Send" class="btn btn-primary">
                                    <p class="tip">Please enter your email address for early access.</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                
        </div>
    </div>

    <div id="fh5co-footer">
        <div class="row">
            <div class="col-md-6">
                <ul id="fh5co-social">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest-square"></i></a></li>
                </ul>
            </div>
            <div class="col-md-6 fh5co-copyright">
                <p>Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></p>
            </div>
        </div>
    </div>
    
</div>





<?php get_footer(); ?>