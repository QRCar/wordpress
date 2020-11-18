<div class="col-sm-6 p-2">
    <article <?php post_class('card shadow'); ?>>

        <div class="card-body">'

           <?php the_excerpt(); ?>

            <a href="<?php the_permalink(); ?>" class="btn btn-primary rounded">Voir</a>
        </div>

    </article>
</div>