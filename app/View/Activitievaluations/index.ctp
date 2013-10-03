<h2><?php echo __('Activitievaluations'); ?></h2>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('activity_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rank'); ?></th>
			<th><?php echo $this->Paginator->sort('in_quality'); ?></th>
			<th><?php echo $this->Paginator->sort('in_time'); ?></th>
			<th><?php echo $this->Paginator->sort('in_quntity'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($activitievaluations as $activitievaluation): ?>
	<tr><td>
			<?php echo $this->Html->link($activitievaluation['Activity']['activity'], array('controller' => 'activities', 'action' => 'view', $activitievaluation['Activity']['id'])); ?>
		</td>
		<td><?php echo h($activitievaluation['Activitievaluation']['rank']); ?>&nbsp;</td>
		<td><?php echo h($activitievaluation['Activitievaluation']['in_quality']); ?>&nbsp;</td>
		<td><?php echo h($activitievaluation['Activitievaluation']['in_time']); ?>&nbsp;</td>
		<td><?php echo h($activitievaluation['Activitievaluation']['in_quntity']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activitievaluation['Activitievaluation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activitievaluation['Activitievaluation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activitievaluation['Activitievaluation']['id']), null, __('Are you sure you want to delete # %s?', $activitievaluation['Activitievaluation']['id'])); ?>
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
<tr><td  class="actions" colspan ='6'>
	<?php echo $this->Html->link(__('New Activitievaluation'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('Show All'), array('action' => 'show')); ?> 
</td></tr>
</table>
