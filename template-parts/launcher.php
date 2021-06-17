<?php
    /*
        * Template Name: Launcher Template
    */
    get_header(); 
    $placeholder_text = get_post_meta( get_the_ID(), "placeholder_text", true );
    $hint_text = get_post_meta( get_the_ID(), "hint_text", true );
    $btn_text = get_post_meta( get_the_ID(), "btn_text", true );
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
                                    <input type="text" class="form-control" placeholder="<?php echo esc_attr( $placeholder_text ); ?>">
                                    <input type="submit" value="<?php echo esc_attr( $btn_text ); ?>" class="btn btn-success">
                                    <p class="tip"><?php echo esc_attr( $hint_text ); ?></p>
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
                    <?php 
                        if(is_active_sidebar( "template-left" )){
                            dynamic_sidebar( "template-left" );
                        }
                    ?>
                </ul>
            </div>
            <div class="col-md-6 fh5co-copyright">
            <?php 
                if(is_active_sidebar( "template-right" )){
                    dynamic_sidebar( "template-right" );
                }
            ?>
            </div>
        </div>
    </div>
    
</div>





<?php get_footer(); ?>