<h2><?php echo __('Initiatives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
		
			<th><?php echo $this->Paginator->sort('initiative_name'); ?></th>
			<th><?php echo $this->Paginator->sort('initiative_description'); ?></th>
			<th><?php echo $this->Paginator->sort('initiative_importance'); ?></th>
			<th><?php echo $this->Paginator->sort('deliverable'); ?></th>
			<th><?php echo $this->Paginator->sort('budget'); ?></th>
			<!--<th><?php echo $this->Paginator->sort('project_owner'); ?></th>
			<th><?php echo $this->Paginator->sort('implimenter'); ?></th>-->
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($initiatives as $initiative): ?>
	<tr>
		
		<td><?php echo h($initiative['Initiative']['initiative_name']); ?>&nbsp;</td>
		<td><?php echo h($initiative['Initiative']['initiative_description']); ?>&nbsp;</td>
		<td><?php echo h($initiative['Initiative']['initiative_importance']); ?>&nbsp;</td>
		<td><?php echo h($initiative['Initiative']['deliverable']); ?>&nbsp;</td>
		<td><?php echo h($initiative['Initiative']['budget']); ?>&nbsp;</td>
		<!--<td><?php echo h($initiative['Initiative']['project_owner']); ?>&nbsp;</td>
		<td><?php echo h($initiative['Initiative']['implimenter']); ?>&nbsp;</td>-->
		<td><?php echo h($initiative['Initiative']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($initiative['Initiative']['end_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $initiative['Initiative']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $initiative['Initiative']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $initiative['Initiative']['id']), null, __('Are you sure you want to delete # %s?', $initiative['Initiative']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>

	<tr><td colspan=8>
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</h4></td> </tr>

	<tr> <td class="paging" colspan=8>
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td> </tr>

	<tr> <td   class="actions" colspan="8">
		<?php echo $this->Html->link(__('New Initiative'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?>
		<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Projects Tasks'), array('controller' => 'projects_tasks', 'action' => 'index')); ?>
		<?php echo $this->Html->link(__('New Project Task'), array('controller' => 'projects_tasks', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('Download'), array('controller' => 'initiatives', 'action' => 'exportxls')); ?> 
		
	</td> </tr>
	</table>
