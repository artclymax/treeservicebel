<?php

$title = $args['title'] ?? '';
$text = $args['text'] ?? '';
$shortcode = $args['shortcode'] ?? '[contact-form-7 id="3234005" title="Контактная форма 1"]';
?>
<section class="section section-form" id="section-form">
	<div class="container section-form__container">
		<h2 class="section-form__title title-1 upcase"><?php echo $title ?></h2>
		<?php if (!empty($text)): ?>
			<div class="section-form__text title-3 descr-box"><?php echo $text ?></div>
		<?php endif ?>
		<div class="section-form__form">
			<?php echo do_shortcode($shortcode) ?>
		</div>
	</div>
</section>