<header class="header-wrapper"> 
    <div class="container">
        <div class="header-inner">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo-area">
                        <h2><a href="<?php echo site_url();?>"><?php bloginfo( "name" ); ?></a></h2>
                    </div>
                </div>
                <div class="col-md-8">
                    <nav class="nav-menu">
                        <?php 
                            wp_nav_menu( array(
                                "theme_location" => "topmenu",
                            ) );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>