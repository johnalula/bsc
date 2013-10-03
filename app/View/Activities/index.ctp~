<h2><?php echo __('Activities'); ?></h2>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('perspective_id'); ?></th>
			<th><?php echo $this->Paginator->sort('activity'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('ways_of_evaluation'); ?></th>
			<th><?php echo $this->Paginator->sort('precondition_from_office'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($activities as $act): ?>
	<tr>	
		<td>
			<?php echo $this->Html->link($act['Perspective']['perspective_name'], array('controller' => 'perspectives', 'action' => 'view', $act['Perspective']['id'])); ?>
		</td>
		<td><?php echo h($act['Activity']['activity']); ?>&nbsp;</td>
		<td><?php echo h($act['Activity']['weight']); ?>&nbsp;</td>
		<td><?php echo h($act['Activity']['ways_of_evaluation']); ?>&nbsp;</td>
		<td><?php echo h($act['Activity']['precondition_from_office']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $act['Activity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $act['Activity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $act['Activity']['id']), null, __('Are you sure you want to delete # %s?', $act['Activity']['id'])); ?>
		</td></tr>
<?php endforeach; ?>
	
	<tr><td colspan ='6'>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td></tr>

	<tr><td class="paging" colspan ='6'>
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>
<tr><td class="actions" colspan ='6'>
	
		<?php echo $this->Html->link(__('New Act'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Perspectives'), array('controller' => 'perspectives', 'action' => 'index')); ?>
		<?php echo $this->Html->link(__('New Perspective'), array('controller' => 'perspectives', 'action' => 'add')); ?> 
</td></tr>
</table>
