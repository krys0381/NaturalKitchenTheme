<?php get_header() ?>

    <?php $movieLoop = new WP_Query(array("post_type" => "movie", "posts_per_page" => -1)) ?>
    <?php while ($movieLoop->have_posts()) : $movieLoop->the_post() ?>
        <div class="col-3">
            <?php get_template_part("template-parts/movie-card") ?>
        </div>
    <?php endwhile ?>

<?php get_footer() ?>