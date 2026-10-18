<?php
get_header();

get_template_part('parts/excerpt');

get_template_part('parts/block', null, ['title' => get_field('who_we_are_title'), 'descr' => get_field('who_we_are_descr')]);

get_template_part('parts/process', null, ['class' => 'slide-4 arrow-mobile']);

get_template_part('parts/block', null, ['title' => get_field('we_helps_title'), 'descr' => get_field('we_helps_descr')]);

get_template_part('parts/section-form', null, ['title' => get_field('form_title'), 'text' => get_field('form_text')]);
get_footer();
?>