<?php

get_header();

// Убедимся, что переменные получены правильно
$term_slug = get_query_var('term');
$taxonomy = get_query_var('taxonomy');

// Получаем термин по слагу и таксономии
$term = get_term_by('slug', $term_slug, $taxonomy);

// Проверяем, что термин получен успешно
if ($term && !is_wp_error($term)) {
    echo esc_html($term->name);
} else {
    echo 'Term not found'; // Альтернативный текст, если термин не найден
}
?>

<div>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php get_template_part('partials/content', 'car'); ?>

    <?php endwhile; else : ?>
        <?php get_template_part('partials/content', 'none'); ?>
    <?php endif; ?>
</div>

<?php 
get_sidebar('cars');
get_footer();
?>
