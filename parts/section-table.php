<?php
$title = $args['title'] ?? '';
$descr = $args['descr'] ?? '';
$thead = $args['thead'] ?? '';
$tbody = $args['tbody'] ?? '';
$row_key = $args['row_key'] ?? '';
?>

<section class="section section-table" id="section-table">
	<div class="container section-table__container">
		<h2 class="section-table__title title-1"><?php echo $title ?></h2>
		<div class="descr-box section-table__descr">
			<?php echo $descr ?>
		</div>
		<div class="section-table__table-box">
			<table class="section-table__table">
				<?php if (!empty($thead)) { ?>
					<thead>
						<tr>
							<?php foreach ($thead as $col): ?>
								<th><?php echo $col['name'] ?></th>
							<?php endforeach ?>
						</tr>
					</thead>
				<?php } ?>
				<?php if (!empty($tbody)) { ?>
					<tbody>
						<?php foreach ($tbody as $row): ?>
							<tr>
								<?php foreach ($row[$row_key] as $col): ?>
									<td><?php echo $col['text'] ?></td>
								<?php endforeach ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				<?php } ?>
			</table>
		</div>
	</div>
</section>