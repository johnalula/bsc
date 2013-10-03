	<h2><?php echo __('Periods'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('period_name'); ?></th>
			<th><?php echo $this->Paginator->sort('frequency_id'); ?></th>
			<th><?php echo $this->Paginator->sort('starting_day'); ?></th>
			<th><?php echo $this->Paginator->sort('ending_day'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($periods as $period): ?>
	<tr>
		
		<td><?php echo h($period['Period']['period_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($period['Frequency']['frequency_name'], array('controller' => 'frequencies', 'action' => 'view', $period['Frequency']['id'])); ?>
		</td>
		<td><?php echo h($period['Period']['starting_day']); ?>&nbsp;</td>
		<td><?php echo h($period['Period']['ending_day']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $period['Period']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $period['Period']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $period['Period']['id']), null, __('Are you sure you want to delete # %s?', $period['Period']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	<tr><td class='c' colspan="5">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td> </tr>

	<tr><td class="paging" colspan="5">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td> </tr>
<tr><td class="actions" colspan="5"> 

		<?php echo $this->Html->link(__('New Period'), array('action' => 'add')); ?></li>
		<?php echo $this->Html->link(__('List Frequencies'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
		<?php echo $this->Html->link(__('New Frequency'), array('controller' => 'frequencies', 'action' => 'add')); ?> </li>
	</td> </tr>
	</table>
