<?php get_header();?>
<?php get_template_part( "theme-parts/common/navigation"); ?>
<?php get_template_part( "theme-parts/front-page/hero"); ?>

<div class="post-wraper">
<div class="container">
<div class="row">
<?php if(have_posts()) : while(have_posts()) : the_post();?>
        <div class="col-md-4 mb-5">
            <div class="posts">
                <div class="post-img">
                    <?php if(has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail( "large", array("class" => "img-fluid")); ?>
                        <?php else: ?>
                            <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/images/wpproject_no_image.jpg" alt="">
                        <?php endif;?>
                </div>
                <div class="post-content">
                    <h4 class="post-title">
                    <?php 
                        $post_format = get_post_format();
                        if($post_format == "aside"){
                            echo '<span class="dashicons dashicons-format-aside"></span>';
                        }else if($post_format == "gallery"){
                            echo '<span class="dashicons dashicons-format-gallery"></span>';
                        }else if($post_format == "link"){
                            echo '<span class="dashicons dashicons-format-links"></span>';
                        }else if($post_format == "image"){
                            echo '<span class="dashicons dashicons-format-image"></span>';
                        }else if($post_format == "quote"){
                            echo '<span class="dashicons dashicons-format-quote"></span>';
                        }else if($post_format == "status"){
                            echo '<span class="dashicons dashicons-format-status"></span>';
                        }else if($post_format == "video"){
                            echo '<span class="dashicons dashicons-format-video"></span>';
                        }else if($post_format == "audio"){
                            echo '<span class="dashicons dashicons-format-audio"></span>';
                        }else if($post_format == "chat"){
                            echo '<span class="dashicons dashicons-format-chat"></span>';
                        }
                    ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <div class="post-meta">
                        <p>Author: <?php echo get_the_author(); ?> | Post At: <?php echo get_the_date("jS M, Y"); ?></p>
                    </div>
                    <?php the_excerpt();?>
                </div>
            </div>
        </div> 
        <?php endwhile;?>
        <?php wp_reset_postdata();?>
        <?php else : get_template_part( "theme-parts/common/no-post-msg"); endif;?>
        </div>
        <!-- dynaminc post pagination -->
        <div class="row">
            <div class="col-md-12">
                <?php the_posts_pagination(array(
                    "screen_reader_text" => " ",
                    "prev_text" => "New Posts",
                    "next_text" => "Old Posts"
                )); ?>
            </div>
        </div>
    </div>
</div>
<?php get_template_part( "/theme-parts/common/theme-footer"); ?>
<?php get_footer(  ) ?>