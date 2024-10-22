<?php

/**
 * Template name: Homepage Template
 */ 
 
get_header();
?>
<div class="cars">
<?php 
$paged = (get_query_var('page')) ? (get_query_var('page')) : 1;
$args = [
    'post_type' => 'car',
    'paged' => $paged,
    'post_per_page' => 2
];

$cars = new WP_Query($args); ?>

    <?php if ($cars->have_posts()) : while ($cars->have_posts()) : $cars->the_post(); ?>

        <?php get_template_part('partials/content', 'car'); ?>

    <?php endwhile; geniuscourses_paginate($cars); else : ?>
        <?php get_template_part('partials/content', 'none'); ?>
    <?php endif; 

    wp_reset_postdata();
    ?>

<hr>

<?php 
unset($args);
$args = [
    'post_type' => 'post',
    'post_per_page' => -1
];

$blogpost = new WP_Query($args); ?>

    <?php if ($blogpost ->have_posts()) : while ($blogpost ->have_posts()) : $blogpost ->the_post(); ?>

        <?php get_template_part('partials/content'); ?>

    <?php endwhile; else : ?>
        <?php get_template_part('partials/content', 'none'); ?>
    <?php endif; 

    wp_reset_postdata();
    ?>
</div>
<?php 
// get_sidebar();
get_footer();