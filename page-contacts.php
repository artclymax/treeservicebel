<?php
get_header();

get_template_part('parts/excerpt');
get_template_part('parts/contacts-block');
?>
<div class="section map" id="map">
	<div class="container map__container">
		<iframe
			src="https://yandex.ru/map-widget/v1/?um=constructor%3A8b81bb7bb15120f78be11c8f951d6aa5adca38d0afff2eb3445952825eed1e6b&amp;source=constructor"
			width="100%" height="100%" frameborder="0"></iframe>
	</div>
</div>
<?php
get_template_part('parts/section-form', null, ['title' => get_field('form_title'), 'text' => get_field('form_text'), 'shortcode' => '[contact-form-7 id="4ec014c" title="Контактная форма для страницы контакты"]']);
get_footer();
?>