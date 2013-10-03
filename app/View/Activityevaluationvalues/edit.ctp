<div class="activityevaluationvalues form">
<?php echo $this->Form->create('Activityevaluationvalue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activityevaluationvalue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('office_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('self');
		echo $this->Form->input('pear');
		echo $this->Form->input('head');
		echo $this->Form->input('student');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activityevaluationvalue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Activityevaluationvalue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activityevaluationvalues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
