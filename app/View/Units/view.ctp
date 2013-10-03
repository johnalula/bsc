<h2><?php  echo __('Unit'); ?></h2>
  <table><tr><td><?php echo h($unit['Unit']['name']); ?></td></tr>
	<tr><td><?php echo h($unit['Unit']['description']); ?></td></tr>
			
<tr><td class="actions">
	<?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['id'])); ?>
	<?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), null, __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> 
	<?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
</td></tr></table>	
<div class="related">
	<hr><h3><?php echo __('Related Measures'); ?></h3><hr>
	<?php if (!empty($unit['Measure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Objective Id'); ?></th>
		<th><?php echo __('Measure Name'); ?></th>
		
		<th><?php echo __('Measure Type'); ?></th>
		
		<th><?php echo __('Polarity'); ?></th>
		<th><?php echo __('Measure Weight'); ?></th>
		
		<th><?php echo __('Formula'); ?></th>
		<th><?php echo __('Data Source'); ?></th>
		<th><?php echo __('Data Quality'); ?></th>
		<th><?php echo __('Data Collector'); ?></th>
		<th><?php echo __('Rationalie'); ?></th>
		<th><?php echo __('Baseline'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($unit['Measure'] as $measure): ?>
		<tr>
			
			<td><?php echo $measure['objective_id']; ?></td>
			<td><?php echo $measure['measure_name']; ?></td>
			
			<td><?php echo $measure['measure_type']; ?></td>
			
			<td><?php echo $measure['polarity']; ?></td>
			<td><?php echo $measure['measure_weight']; ?></td>
			
			<td><?php echo $measure['formula']; ?></td>
			<td><?php echo $measure['data_source']; ?></td>
			<td><?php echo $measure['data_quality']; ?></td>
			<td><?php echo $measure['data_collector']; ?></td>
			<td><?php echo $measure['rationalie']; ?></td>
			<td><?php echo $measure['baseline']; ?></td>
			
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
