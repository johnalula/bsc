	<h2><?php echo __('Frequencies'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('frequency_name'); ?></th>
			<th><?php echo $this->Paginator->sort('number_of_days'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($frequencies as $frequency): ?>
	<tr>
		<td><?php echo h($frequency['Frequency']['frequency_name']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['number_of_days']); ?>&nbsp;</td>
		<td><?php echo h($frequency['Frequency']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $frequency['Frequency']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $frequency['Frequency']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $frequency['Frequency']['id']), null, __('Are you sure you want to delete # %s?', $frequency['Frequency']['id'])); ?>
		</td>
	</tr>
	


<?php endforeach; ?>
		
	<tr><td colspan="4">
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</h4></td></tr>

	<tr><td class="paging" colspan="4" >
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>
<tr>
		
		<td class="actions" colspan="4">
			<?php echo $this->Html->link(__('New Frequency'), array('action' => 'add')); ?>
			<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
			<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
			<?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> 
			<?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> 
		</td>
	</tr>
	</table>
