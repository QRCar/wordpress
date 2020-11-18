<?php get_header(); ?>

<main id="main" <?php get_post_class() ?> >

    <section id="page-content" class="section">
        <div class="container">
        <h1 class="h1"><?php _e('Liste des articles', 'qrcar'); ?></h1>

            <?php if (have_posts()): ?>
                <div class="row">
                    <?php while (have_posts()): the_post(); ?>

                        <?php get_template_part('template-parts/post'); ?>

                    <?php endwhile; ?>
                </div>
            <?php else: ?>

                <div class="empty">
                    <span class="empty-text">
                        <?php _e('There`\'s no posts to display', 'qrcar'); ?>
                    </span>
                </div>

            <?php endif; ?>

        </div>
    </section>

</main>

<?php get_footer(); ?>
