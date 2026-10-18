<?php
$title = $args['title'] ?? '';
$text = $args['text'] ?? '';

?>
<section class="section jobs-form" id="jobs-form">
	<div class="container jobs-form__container">
		<h2 class="jobs-form__title title-1">Хотите работать с нами?</h2>
		<div class="descr-box jobs-form__descr-box">Оставьте заявку через форму ниже — мы свяжемся с вами для уточнения деталей. <br> Также вы можете прислать резюме на электронную почту или позвонить по указанным номерам.
		</div>
		<div class="jobs-form__form">
			<?php echo do_shortcode('[contact-form-7 id="5f16a5f" title="Форма с резюме"]') ?>
		</div>
	</div>
</section>