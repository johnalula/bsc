<h2><?php echo __('Activityevaluationvalues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('office_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('self'); ?></th>
			<th><?php echo $this->Paginator->sort('pear'); ?></th>
			<th><?php echo $this->Paginator->sort('head'); ?></th>
			<th><?php echo $this->Paginator->sort('student'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($activityevaluationvalues as $activityevaluationvalue): ?>
	<tr>
		
		<td>
			<?php echo $this->Html->link($activityevaluationvalue['Office']['office_name'], array('controller' => 'offices', 'action' => 'view', $activityevaluationvalue['Office']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activityevaluationvalue['User']['first_name'], array('controller' => 'users', 'action' => 'view', $activityevaluationvalue['User']['id'])); ?>
		</td>
		<td><?php echo h($activityevaluationvalue['Activityevaluationvalue']['self']); ?>&nbsp;</td>
		<td><?php echo h($activityevaluationvalue['Activityevaluationvalue']['pear']); ?>&nbsp;</td>
		<td><?php echo h($activityevaluationvalue['Activityevaluationvalue']['head']); ?>&nbsp;</td>
		<td><?php echo h($activityevaluationvalue['Activityevaluationvalue']['student']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $activityevaluationvalue['Activityevaluationvalue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $activityevaluationvalue['Activityevaluationvalue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $activityevaluationvalue['Activityevaluationvalue']['id']), null, __('Are you sure you want to delete # %s?', $activityevaluationvalue['Activityevaluationvalue']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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

<p class="actions">
	<?php echo $this->Html->link(__('New Activityevaluationvalue'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> 
	
</p>
