<h2><?php echo __('Sub activities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('year'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('period_id'); ?></th>
			<th><?php echo $this->Paginator->sort('sub_activity'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($subs as $sub): ?>
	<tr>
		
		<td><?php echo h($sub['Sub']['year']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sub['Activity']['activity'], array('controller' => 'activities', 'action' => 'view', $sub['Activity']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($sub['Period']['period_name'], array('controller' => 'periods', 'action' => 'view', $sub['Period']['id'])); ?>
		</td>
		<td><?php echo h($sub['Sub']['sub_activity']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sub['Sub']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sub['Sub']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sub['Sub']['id']), null, __('Are you sure you want to delete # %s?', $sub['Sub']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	
	<tr><td colspan ="5">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td></tr>
</table>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

<p class="actions">
	<?php echo $this->Html->link(__('New Sub'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> 
</p>
