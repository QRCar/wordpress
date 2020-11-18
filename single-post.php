<?php get_header(); ?>

<main id="main" <?php get_class('vh-100'); ?> >
    <div class="container my-3 vh-100">
        <?php if (have_posts()): ?>

            <?php the_post_thumbnail(); ?>

            <?php the_title('<h3>','</h3>'); ?>

            <?php the_content(); ?>

        <?php endif; ?>

        <?php if (is_singular()) : if (comments_open()) : comments_template(); endif; endif; ?>

    </div>
</main>

<?php get_footer(); ?>
