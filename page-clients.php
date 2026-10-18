<?php
get_header();
?>

<?php get_template_part('parts/excerpt') ?>
<?php get_template_part('parts/section-clients') ?>
<?php get_template_part('parts/block', null, ['title' => get_field('block_title'), 'descr' => get_field('block_descr')]); ?>
<?php get_template_part('parts/reviews'); ?>
<?php get_template_part('parts/section-form', null, ['title' => get_field('form_title'), 'text' => get_field('form_text')]) ?>
<?php
get_footer();
?>