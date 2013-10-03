	<h2><?php echo __('Offices'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	
	<tr>
			
			<th><?php echo $this->Paginator->sort('office_name'); ?></th>
			<th><?php echo $this->Paginator->sort('reports_to_id'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($offices as $office): ?>
	<tr>
		
		<td><?php echo h($office['Office']['office_name']); ?>&nbsp;</td>
                <td><?php echo h($office['Parentoffice']['office_name']); ?>&nbsp;</td>
			
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $office['Office']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $office['Office']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $office['Office']['id']), null, __('Are you sure you want to delete # %s?', $office['Office']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

	<tr> <td class="paging" colspan="3">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td> </tr>

	<tr> <td class="paging" colspan="3">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td> </tr>

	

	<tr> <td class="actions" colspan="3" class="paging"> 
		<?php echo $this->Html->link(__('New Office'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 

		</td> </tr>
	</table>

