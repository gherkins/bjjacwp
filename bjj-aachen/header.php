<header>
    <div class="container p-0">
        <p class="">
            &nbsp;
        </p>
        <div class="logo bg-black p-2 ps-2 pe-2 pt-3">
            <a href="<?php echo get_home_url(); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/bjj-aachen.svg" alt="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?>" class="img-fluid">
            </a>
        </div>
        <h5 class="text-end pt-2 pe-4 text-uppercase"><?php echo get_bloginfo( 'description' ); ?></h5>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0">
            <div class="container-fluid">
                <div class="bb"></div>
                <button class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#nav-primary"
                >
                    <span class="navbar-toggler-icon text-white"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav-primary">
                    <?php
                    wp_nav_menu([
                        'theme_location' => 'primary',
                        'container' => false,
                        'menu_class' => '',
                        'fallback_cb' => '__return_false',
                        'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                        'depth' => 2,
                        'walker' => new bootstrap_5_wp_nav_menu_walker(),
                    ]);
                    ?>
                </div>
            </div>
        </nav>
    </div>
</header>