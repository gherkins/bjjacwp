<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <?php include 'head.php'; ?>
    <body>
        <?php get_header() ?>
        <main>
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>
                            <?php the_title() ?>
                        </h1>
                        <?php the_content() ?>
                    </div>
                </div>
            </div>

        </main>
        <?php get_footer() ?>
    </body>
</html>
