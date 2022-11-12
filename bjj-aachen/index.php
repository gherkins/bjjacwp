<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php get_header() ?>
        <main>
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col">
                        <h1>
                            News
                        </h1>
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post();  ?>
                                <small>
                                    <?php the_date() ?>
                                </small>
                                <h2>
                                    <?php the_title() ?>
                                </h2>
                                <?php the_excerpt() ?>
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-dark">More&hellip;</a>
                                <h6 class="mt-3 mb-5 text-center">~</h6>
                            <?php endwhile; ?>

                            <div class="mt-5 mb-5">
                                <?php if (get_next_posts_link()): ?>
                                    <a href="<?php next_posts_link() ?>" class="btn btn-outline-dark float-end"> >> </a>
                                <?php endif; ?>

                                <?php if (get_previous_posts_link()): ?>
                                    <a href="<?php previous_posts_link() ?>" class="btn btn-outline-dark"> << </a>
                                <?php endif; ?>
                            </div>

                        <?php else : ?>
                            <h6>---</h6>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </main>
        <?php get_footer() ?>
    </body>
</html>
