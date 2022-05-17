<div class="rating">
    <?php for($i = 0; $i < intval($args["rating"]); $i++): ?>
        <span class="fa fa-star checked"></span>
    <?php endfor ?>
    <?php for($i = 0; $i < 5 - intval($args["rating"]); $i++): ?>
        <span class="fa fa-star"></span>
    <?php endfor ?>
</div>