<div class="frequencies view">
<h2><?php  echo __('Frequency'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency Name'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['frequency_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number Of Days'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['number_of_days']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($frequency['Frequency']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Frequency'), array('action' => 'edit', $frequency['Frequency']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Frequency'), array('action' => 'delete', $frequency['Frequency']['id']), null, __('Are you sure you want to delete # %s?', $frequency['Frequency']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Frequencies'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frequency'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Measures'); ?></h3>
	<?php if (!empty($frequency['Measure'])): ?>
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
		foreach ($frequency['Measure'] as $measure): ?>
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
<div class="related">
	<h3><?php echo __('Related Periods'); ?></h3>
	<?php if (!empty($frequency['Period'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Period Name'); ?></th>
		<th><?php echo __('Frequency Id'); ?></th>
		<th><?php echo __('Starting Day'); ?></th>
		<th><?php echo __('Ending Day'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($frequency['Period'] as $period): ?>
		<tr>
			<td><?php echo $period['id']; ?></td>
			<td><?php echo $period['created']; ?></td>
			<td><?php echo $period['modified']; ?></td>
			<td><?php echo $period['period_name']; ?></td>
			<td><?php echo $period['frequency_id']; ?></td>
			<td><?php echo $period['starting_day']; ?></td>
			<td><?php echo $period['ending_day']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'periods', 'action' => 'view', $period['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'periods', 'action' => 'edit', $period['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'periods', 'action' => 'delete', $period['id']), null, __('Are you sure you want to delete # %s?', $period['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
