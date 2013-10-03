<div class="thresholds view">
<h2><?php  echo __('Threshold'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Threshold Name'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['threshold_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lower'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['lower']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Upper'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['upper']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Colour'); ?></dt>
		<dd>
			<?php echo h($threshold['Threshold']['colour']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Threshold'), array('action' => 'edit', $threshold['Threshold']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Threshold'), array('action' => 'delete', $threshold['Threshold']['id']), null, __('Are you sure you want to delete # %s?', $threshold['Threshold']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Thresholds'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Threshold'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Measures'); ?></h3>
	<?php if (!empty($threshold['Measure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Objective Id'); ?></th>
		<th><?php echo __('Measure Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Measure Type'); ?></th>
		<th><?php echo __('Unit Id'); ?></th>
		<th><?php echo __('Polarity'); ?></th>
		<th><?php echo __('Measure Weight'); ?></th>
		<th><?php echo __('Frequency Id'); ?></th>
		<th><?php echo __('Formula'); ?></th>
		<th><?php echo __('Data Source'); ?></th>
		<th><?php echo __('Data Quality'); ?></th>
		<th><?php echo __('Data Collector'); ?></th>
		<th><?php echo __('Rationalie'); ?></th>
		<th><?php echo __('Baseline'); ?></th>
		<th><?php echo __('Threshold Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($threshold['Measure'] as $measure): ?>
		<tr>
			<td><?php echo $measure['id']; ?></td>
			<td><?php echo $measure['created']; ?></td>
			<td><?php echo $measure['modified']; ?></td>
			<td><?php echo $measure['objective_id']; ?></td>
			<td><?php echo $measure['measure_name']; ?></td>
			<td><?php echo $measure['description']; ?></td>
			<td><?php echo $measure['measure_type']; ?></td>
			<td><?php echo $measure['unit_id']; ?></td>
			<td><?php echo $measure['polarity']; ?></td>
			<td><?php echo $measure['measure_weight']; ?></td>
			<td><?php echo $measure['frequency_id']; ?></td>
			<td><?php echo $measure['formula']; ?></td>
			<td><?php echo $measure['data_source']; ?></td>
			<td><?php echo $measure['data_quality']; ?></td>
			<td><?php echo $measure['data_collector']; ?></td>
			<td><?php echo $measure['rationalie']; ?></td>
			<td><?php echo $measure['baseline']; ?></td>
			<td><?php echo $measure['threshold_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'measures', 'action' => 'view', $measure['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'measures', 'action' => 'edit', $measure['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'measures', 'action' => 'delete', $measure['id']), null, __('Are you sure you want to delete # %s?', $measure['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
