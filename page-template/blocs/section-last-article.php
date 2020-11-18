<?php global $posts; ?>

<section class="section">
    <div class="container">
        <?= get_field('title') ?>
        <?php if($posts = get_field('last_article')): ?>
            <div class="row">

                <?php foreach ($posts as $post): setup_postdata($post) ?>

                    <div class="col-sm-6">

                        <article class="card shadow rounded-lg">

                            <div class="card-body">

                                <div class="card-title">
                                    <h5>
                                        <?= $post->post_title ?>
                                    </h5>
                                </div>

                                <?= $post->post_excerpt; ?>

                            </div>

                        </article>

                    </div>
                    <?php wp_reset_postdata(); ?>

                <?php endforeach; ?>

            </div>

        <?php endif; ?>
    </div>
</section>
