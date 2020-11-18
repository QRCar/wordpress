<?php
/**
 * Template Name: contact
 */

get_header(); ?>

<main id="main" class="<?= get_class() ?>">
    <section class="section bg-gradient-blue">
        <div class="container">
            <h1 class="text-center text-white">Une envie de nous contacter ?</h1>
            <p class="text-muted text-center text-lighter">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis delectus deserunt
                harum hic iusto laboriosam obcaecati officiis sapiente voluptate?
            </p>
        </div>
    </section>
    <div class="container mt-9">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                <?php echo do_shortcode('[contact-form-7 id="5" title="Formulaire de contact 1"]'); ?>
            </div>
            <div class="col-sm-6 px-5">
                <h3 class="h2 card-title">Autres moyen de contact</h3>
                <p class="text-muted">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet debitis delectus deserunt
                    harum hic iusto laboriosam obcaecati officiis sapiente voluptate?
                </p>
                <address>
                    16 boulevard général de gaulle<br>44300 NANTES
                </address>
                <a href="tel:0000000">Appelez au : 0000000</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
