<?php
$list = get_field('contacts_list');
?>
<div class="section contacts-block" id="contacts-block">
	<div class="container contacts-block__container">
		<ul class="contacts-block__list">
			<?php if (!empty($list)) {
				foreach ($list as $item) {
					$class = '';
					if (empty($item['icon'])) {
						$class = 'no-icon';
					}
					?>
					<li class="contacts-block__item">
						<div class="contacts-block__title-box">
							<div class="contacts-block__icon <?php echo $class ?>">
								<?php if (!empty($item['icon'])): ?>
									<img src="<?php echo $item['icon'] ?>" alt="<?php echo $item['title'] ?>">
								<?php endif ?>
							</div>
							<h3 class="contacts-block__title"><?php echo $item['title'] ?></h3>
						</div>
						<div class="contacts-block__content descr-box">
							<?php echo $item['descr'] ?>
						</div>
					</li>
				<?php }
			} ?>
		</ul>
	</div>
</div>