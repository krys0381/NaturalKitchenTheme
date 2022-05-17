<?php get_header() ?>

    <?php while(have_posts()): the_post() ?>

        <div class="row">
            <div class="col-12">
                <h2><?php the_title() ?></h2>
            </div>
            <div class="col-8">
                <?php the_field("description") ?>
            </div>
            <div class="col-3">
                <img class="img-fluid rounded" src="<?php the_field("cover") ?>" alt="cover">
                <div class="my-3">
                    <?php get_template_part("template-parts/ratings", null, array("rating" => get_field("rating"))) ?>
                </div>
                <p class="h4">
                    <?php $terms = get_the_terms($post, array("genre", "availability")) ?? array("hej" => "YAY") ?>
                    <?php if($terms): ?>
                    <?php foreach($terms ?? array() as $term): ?>
                        <span class="badge text-bg-secondary">
                            <a class="text-light text-decoration-none" href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a>
                        </span>
                    <?php endforeach ?>
                    <?php endif ?>
                </p>
            </div>
        </div>

    <?php endwhile ?>

<?php get_footer() ?>