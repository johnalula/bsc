<h2><?php echo __('Measures'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('objective_id'); ?></th>
			<th><?php echo $this->Paginator->sort('measure_name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('measure_type'); ?></th>
		
			
			<th><?php echo $this->Paginator->sort('measure_weight'); ?></th>
			<th><?php echo $this->Paginator->sort('frequency_id'); ?></th>
			<th><?php echo $this->Paginator->sort('baseline'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('threshold_id'); ?></th>-->
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($measures as $measure): ?>
	<tr>
		<td>
		<?php echo $this->Html->link($measure['Objective']['objective_name'], array('controller' => 'objectives', 'action' => 'view', $measure['Objective']['id'])); ?>
		</td>
		<td><?php echo h($measure['Measure']['measure_name']); ?>&nbsp;</td>
		<td><?php echo h($measure['Measure']['description']); ?>&nbsp;</td>
		<td><?php echo h($measure['Measure']['measure_type']); ?>&nbsp;</td>
		
		
		<td><?php echo h($measure['Measure']['measure_weight']); ?>&nbsp;</td>
		<td>
		<?php echo $this->Html->link($measure['Frequency']['frequency_name'], array('controller' => 'frequencies', 'action' => 'view', $measure['Frequency']['id'])); ?>
		</td>
		<td><?php echo h($measure['Measure']['baseline']); ?>&nbsp;</td>
		<!--<td>
		<?php echo $this->Html->link($measure['Threshold']['id'], array('controller' => 'thresholds', 'action' => 'view', $measure['Threshold']['id'])); ?>
		</td>-->
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'showrelated', $measure['Measure']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>

	<tr><td colspan=8>
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></h4>	</td> </tr>

	<tr><td class="paging" colspan=8>
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td> </tr>

		
	</table>

