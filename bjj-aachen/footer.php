<footer>
    <div class="container bg-black">
        <div class="row pt-5">
            <div class="col-lg-4 mb-5 text-light">
                <h6>
                    Undefeated
                </h6>
                <img src="<?php bloginfo('template_directory'); ?>/images/no-competition-team.png" alt="" style="max-width: 200px">
            </div>
            <div class="col-lg-4 mb-5 text-light">
                <h6>
                    Unsociable
                </h6>
                <ul class="list-unstyled">
                    <?php foreach (bjjac_get_menu_items('footer') as $menuItem): ?>
                        <li>
                            <a class="text-light" href="<?php echo $menuItem->url; ?>">
                                <?php echo $menuItem->title; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="col-lg-4 mb-5 text-light">
                <h6>
                    Unaffiliated
                </h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.bjjglobetrotters.com/" target="_blank">
                            <img src="<?php bloginfo('template_directory'); ?>/images/bjj-globetrotters.png" alt="BJJ Globetrotters" style="max-width: 200px">
                        </a>
                        <p>
                            BJJ Globetrotters Member 🤙
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/bootstrap/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>