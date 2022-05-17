<?php $taxonomy = get_taxonomy(get_query_var("taxonomy")) ?>
<?php get_header() ?>

    <div class="col-12">
        <h1><?php echo $taxonomy->labels->singular_name ?>: <?php echo get_queried_object()->name ?></h1>
    </div>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <div class="col-3">
                <?php get_template_part("template-parts/movie-card") ?>
            </div>
        <?php endwhile ?>
    <?php else: ?>
        <p>There are no movies in this <?php echo $taxonomy->name ?> yet</p>
    <?php endif; ?>

<?php get_footer() ?>