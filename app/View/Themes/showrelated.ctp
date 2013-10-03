<h2><?php  echo __('Theme'); ?></h2>
    <table><tr><td><h3><?php echo h($theme['Theme']['stategic_theme']); ?><h3></td></tr>
	  <tr><td>
		<dd><?php echo __('Description'); ?>:
			<h4><?php echo h($theme['Theme']['description']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Result'); ?>:
		
			<h4><?php echo h($theme['Theme']['result']); ?></h4>
			&nbsp;
		</dd>
	</td></tr>

</table>
<div class="related">
	<hr><h3><?php echo __('Related Objectives'); ?></h3><hr>
	<?php if (!empty($theme['Objective'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Objective Name'); ?></th>
		<th><?php echo __('Objective Weight'); ?></th>
		<th><?php echo __('Objective Description'); ?></th>
		
		<th><?php echo __('Outcome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($theme['Objective'] as $objective): ?>
		<tr>
			<td><?php echo $objective['objective_name']; ?></td>
			<td><?php echo $objective['objective_weight']; ?></td>
			<td><?php echo $objective['objective_description']; ?></td>
			<td><?php echo $objective['outcome']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'objectives', 'action' => 'showrelated', $objective['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('show'), array('action' => 'show'))?>
		
	</div>

