<?php 
$wpproject_layout_class ="col-md-8";
if(!is_active_sidebar( "sidebar-1" )){
    $wpproject_layout_class ="col-md-12";
}
?>
<?php get_header();?>
<?php get_template_part( "theme-parts/common/navigation"); ?>

<div class="post-wraper">
<div class="container">
<div class="row">
<?php if(have_posts()) : while(have_posts()) : the_post();?>
        <div class="<?php echo $wpproject_layout_class; ?> mb-5">
        <?php if(class_exists("Attachments")) : ?>
            <div class="slider">
                <?php $attachments = new Attachments( 'slider' ); ?>
                <?php if( $attachments->exist() ) : ?>
                    <?php while( $attachments->get() ) : ?>
                        <?php echo $attachments->image( 'large'); ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
            <div class="single-post">
            <?php if(!class_exists("Attachments")): ?>
                <div class="post-img">
                    <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail( "large", array("class" => "img-fluid")); ?>
                        <?php else: ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/wpproject_no_image.jpg" alt="">
                        <?php endif;?>
                </div>
                <?php endif; ?>
                <div class="post-content">
                    <h4 class="post-title mt-3"><?php the_title(); ?></h4>
                    <div class="post-meta">
                        <p>Author: <?php echo get_the_author(); ?> | Post At: <?php echo get_the_date("jS M, Y"); ?></p>
                    </div>
                    <?php the_content();?>
                </div>
            </div>
            <div class="row my-5 authorsection">
        <div class="col-md-2 authorimg">
            <?php echo get_avatar( get_the_author_meta( "id")); ?>
        </div>
        <div class="col-md-10">
            <h4><?php echo get_the_author_meta( "display_name"); ?></h4>
            <p><?php echo get_the_author_meta( "description"); ?></p>
        </div>
    </div>
        </div>
        <?php if(is_active_sidebar( "sidebar-1" )): ?>
        <div class="col-md-4 main-sidebar">
            <?php 
                if(is_active_sidebar( "sidebar-1" )){
                    dynamic_sidebar( "sidebar-1" );
                }
            ?>
            <?php endif; ?>
        </div>
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
        <?php else : get_template_part( "theme-parts/common/no-post-msg"); endif;?>

        </div>
    </div>
</div>
<?php get_template_part( "/theme-parts/common/theme-footer"); ?>
<?php get_footer(  ) ?>