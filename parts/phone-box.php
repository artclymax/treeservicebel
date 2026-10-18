<?php
$additional_class = $args['class'] ?? '';
$class = 'phone-box ' . $additional_class;
?>
<ul class="<?php echo $class ?>">
	<?php $list = get_field('opt_phones', 'options');
	if (!empty($list)) {
		foreach ($list as $item) { ?>
			<li class="phone-box__item">
				<a class="phone-box__link link"
					href="tel:+<?php echo str_replace(array(' ', '-', '+', '(', ')'), array('', '', '', '', ''), $item['phone']) ?>"
					style="--phone-icon: url('<?php echo $item['icon'] ?>');"><?php echo $item['phone'] ?></a>
			</li>
		<?php }
	}
	?>
</ul>