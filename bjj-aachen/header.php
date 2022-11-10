<header>
    <div class="container p-0">
        <p class="">
            &nbsp;
        </p>
        <div class="logo bg-black p-2 pt-4">
            <img src="<?php bloginfo('template_directory'); ?>/images/bjj-aachen.svg" alt="" class="img-fluid">
        </div>
        <h5 class="text-end pt-2 pe-4 text-uppercase"><?php echo bloginfo( 'description' ); ?></h5>
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
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php foreach (bjjac_get_menu_items('primary') as $menuItem): ?>
                            <li class="nav-item">
                                <a class="nav-link active" href="<?php echo $menuItem->url; ?>">
                                    <?php echo $menuItem->title; ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>