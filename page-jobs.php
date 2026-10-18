<?php
get_header();

get_template_part('parts/excerpt');
get_template_part('parts/process', null, ['class' => 'arrow-mobile']);
get_template_part('parts/jobs-section');
get_template_part('parts/jobs-form');


get_footer();
?>