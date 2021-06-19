<?php get_header();?>
<?php get_template_part( "theme-parts/common/navigation"); ?>

<div class="post-wraper">
<div class="container">
<div class="row">
<?php if(have_posts()) : while(have_posts()) : the_post();?>
        <div class="col-md-8 mb-5">
            <div class="single-post">
                <div class="post-img">
                    <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail( "large", array("class" => "img-fluid")); ?>
                        <?php else: ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/wpproject_no_image.jpg" alt="">
                        <?php endif;?>
                </div>
                <div class="post-content">
                    <h4 class="post-title mt-3"><?php the_title(); ?></h4>
                    <div class="post-meta">
                        <p>Author: <?php echo get_the_author(); ?> | Post At: <?php echo get_the_date("jS M, Y"); ?></p>
                    </div>
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <?php 
                if(is_active_sidebar( "sidebar-1" )){
                    dynamic_sidebar( "sidebar-1" );
                }
            ?>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
        <?php else : get_template_part( "theme-parts/common/no-post-msg"); endif;?>
        </div>
    </div>
</div>
<?php get_template_part( "/theme-parts/common/theme-footer"); ?>
<?php get_footer(  ) ?>