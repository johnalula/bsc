<h2><?php echo __('Projects Tasks'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('task_name'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($projectsTasks as $projectsTask): ?>
	<tr>
		
		<td><?php echo h($projectsTask['ProjectsTask']['task_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectsTask['Project']['project_name'], array('controller' => 'projects', 'action' => 'view', $projectsTask['Project']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projectsTask['ProjectsTask']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projectsTask['ProjectsTask']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projectsTask['ProjectsTask']['id']), null, __('Are you sure you want to delete # %s?', $projectsTask['ProjectsTask']['id'])); ?>
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
	<?php echo $this->Html->link(__('New Projects Task'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?>
</p>
