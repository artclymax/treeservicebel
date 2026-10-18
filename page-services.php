<?php
get_header();
?>

<?php get_template_part('parts/excerpt') ?>
<?php get_template_part('parts/services-section') ?>
<?php get_template_part('parts/process', null, ['title' => get_field('process_title', 'options'), 'list' => get_field('process_list', 'options')]); ?>
<?php get_template_part('parts/section-form', null, ['title' => get_field('form_title'), 'text' => get_field('form_text')]) ?>
<?php
get_footer();
?>