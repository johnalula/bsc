<div class="projectsTasks form">
<?php echo $this->Form->create('ProjectsTask'); ?>
	<fieldset>
		<legend><?php echo __('Edit Projects Task'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('task_name');
		echo $this->Form->input('project_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjectsTask.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjectsTask.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects Tasks'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
