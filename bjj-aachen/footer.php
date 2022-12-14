<footer>
    <div class="container bg-black">
        <div class="row pt-5">
            <div class="col-lg-4 mb-5 text-light">
                <img src="<?php bloginfo('template_directory'); ?>/images/turtle-riders.png" alt="Brazilian Jiu Jitsu Aachen - Turtle Riders" style="max-width: 200px">
            </div>
            <div class="col-lg-4 mb-5 text-light">
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
                <ul class="list-unstyled">
                    <li>
                        <a href="https://www.bjjglobetrotters.com/" target="_blank" rel="noopener">
                            <img src="<?php bloginfo('template_directory'); ?>/images/bjj-globetrotters.png" alt="BJJ Globetrotters" style="max-width: 200px">
                        </a>
                        <p>
                            BJJ Globetrotters Member 🤙
                        </p>
                    </li>
                    <li>
                        <a href="http://psv-aachen-jujutsu.de/" target="_blank" rel="noopener">
                            <img src="<?php bloginfo('template_directory'); ?>/images/psv-aachen.png" alt="PSV Aachen" style="max-width: 95px; display: inline-block" class="me-3">
                        </a>
                        <a href="https://www.psv-aachen.de/" target="_blank" rel="noopener">
                            <img src="<?php bloginfo('template_directory'); ?>/images/psv-aachen-ju-jutsu.png" alt="PSV Aachen Ju Jutsu" style="max-width: 85px; display: inline-block">
                        </a>
                        <p>
                            A department of PSV Aachen JJ
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_directory'); ?>/bootstrap/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>