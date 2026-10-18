<?php
$additional_class = $args['class'] ?? '';
$text = $args['text'] ?? get_field('opt_modal_btn', 'options');
$class = 'btn ' . $additional_class;
?>
<button class="<?php echo $class ?>" type="button" data-modal-btn="form-modal"><?php echo $text ?></button>