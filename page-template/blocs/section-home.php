<?php global $post; ?>

<section>

    <div>
        <div class="row mb-9 mt-9 align-items-center <?= get_field('col_reverse') ? 'flex-row-reverse' : '' ?>">
            <div class="col-md-12  col-lg-6">
                <img class="embed-responsive" src="<?= get_field('image_url')['url'] ?>" alt="<?= get_field('image_url')['url'] ?>">
            </div>
            <div class="col-md-12 col-lg-6">
                <h2>
                    <?= get_field('title') ?>
                </h2>
                <p class="text-muted">
                    <?= get_field('description') ?>
                </p>
            </div>
        </div>
    </div>

</section>
