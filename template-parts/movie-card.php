
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="<?php the_field("cover") ?>" alt="Card image cap">
    <div class="card-body">
        <p class="card-text">
            <?php get_template_part("template-parts/ratings", null, array("rating" => get_field("rating"))) ?>
        </p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary w-100">Read more</a>
    </div>
</div>