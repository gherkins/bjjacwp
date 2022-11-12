<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php get_header() ?>
        <main>
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col">
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <small><?php the_date() ?></small>
                            <h1>
                                <?php the_title() ?>
                            </h1>
                            <?php the_content() ?>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

        </main>
        <?php get_footer() ?>
    </body>
</html>
