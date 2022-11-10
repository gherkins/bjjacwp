<!DOCTYPE html>
<html>
    <?php include 'head.php'; ?>
    <body>
        <?php get_header() ?>
        <main>
            <div class="container pt-5 pb-5">
                <div class="row">
                    <div class="col">
                        <?php if ( have_posts() ) : ?>
                            <?php while ( have_posts() ) : the_post();  ?>
                                <h2><?php the_title() ?></h2>
                                <?php the_excerpt() ?>
                                <a href="<?php the_permalink() ?>" class="btn btn-outline-dark">More...</a>
                            <?php endwhile; ?>

                            <div class="mt-5 mb-5">
                                <a href="<?php next_posts_link() ?>" class="btn btn-outline-dark float-end">Newer Posts</a>
                                <a href="<?php previous_posts_link() ?>" class="btn btn-outline-dark">Older Posts</a>
                            </div>

                        <?php else : ?>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </main>
        <?php get_footer() ?>
    </body>
</html>
