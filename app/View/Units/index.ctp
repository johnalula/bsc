	<h2><?php echo __('Units'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($units as $unit): ?>
	<tr>
		
		<td><?php echo h($unit['Unit']['name']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $unit['Unit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $unit['Unit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $unit['Unit']['id']), null, __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
		
	<tr> <td class="c" colspan='3'>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td></tr>

	<tr> <td class="paging" colspan='3'>
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>
<tr> <td class="actions" colspan="3">
		<?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?></li>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> </li>
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> </li>
	</td></tr>
	</table>
