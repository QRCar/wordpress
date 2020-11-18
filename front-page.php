<?php get_header(); ?>

<main id="main" class="<?= get_class() ?>">

    <section class="vh-100 d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <img src=" <?= get_template_directory_uri() ?>/assets/svg/phone-card.svg" class="col-6 mb-6" alt="phone-card">
            </div>
            <h1 class="text-center font-weight-bold" style="font-size: 64px">QrCar le nouveau systeme de paiement</h1>
            <div class="d-flex justify-content-center mt-9">
                <div class="mouse"></div>
            </div>
        </div>
    </section>

    <div class="container">
        <?php if (have_posts()): ?>
            <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

</main>

<?php get_footer(); ?>
