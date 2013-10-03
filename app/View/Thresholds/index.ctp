<h2><?php echo __('Thresholds'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('performance'); ?></th>
			<th><?php echo $this->Paginator->sort('lower'); ?></th>
			<th><?php echo $this->Paginator->sort('upper'); ?></th>
			<th><?php echo $this->Paginator->sort('background'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($thresholds as $threshold): ?>
	<tr>
		
		<td><?php echo h($threshold['Threshold']['performance']); ?>&nbsp;</td>
		<td><?php echo h($threshold['Threshold']['lower']); ?>&nbsp;</td>
		<td><?php echo h($threshold['Threshold']['upper']); ?>&nbsp;</td>
		<td><?php echo $this->Html->image('thresholds/'.$threshold['Threshold']['background'], array('alt'=>'not imge','width'=>'20', 'height'=>'20')); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $threshold['Threshold']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $threshold['Threshold']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $threshold['Threshold']['id']), null, __('Are you sure you want to delete # %s?', $threshold['Threshold']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	
	<tr> <td>&nbsp;</td> </tr>
	<tr> <td class="actions" colspan="4">
		<?php echo $this->Html->link(__('New Threshold'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
		</td> </tr>	
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>


