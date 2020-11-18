<?php get_header(); ?>

<main id="main" <?php get_class(); ?> >
    <div class="container my-3">
        <?php if (have_posts()): ?>

            <?php the_post_thumbnail(); ?>

            <?php the_title('<h3>','</h3>'); ?>

            <?php the_category(); ?>

            <?php the_content(); ?>

        <?php endif; ?>

        <?php if (is_singular()) : if (comments_open()) : comments_template(); endif; endif; ?>

    </div>
</main>

<?php get_footer(); ?>
