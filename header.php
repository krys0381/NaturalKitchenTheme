<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>

    <header style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/popcorn.jpg);">
        <h1><a href="<?php echo site_url() ?>"><?php bloginfo("name") ?></a></h1>
        <ul class="menu" id="menu-genres">
            <?php $terms = get_terms("genre") ?>
            <?php foreach($terms as $term): ?>
                <li><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
            <?php endforeach ?>
        </ul>
    </header>
    <ul class="menu" id="menu-availabilities">
        <?php $terms = get_terms("availability") ?>
        <?php foreach($terms as $term): ?>
            <li><a href="<?php echo get_term_link($term) ?>"><?php echo $term->name ?></a></li>
        <?php endforeach ?>
    </ul>

    <div class="container my-5">
        <div class="row">