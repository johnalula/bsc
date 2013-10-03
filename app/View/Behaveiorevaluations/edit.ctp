<div class="behaveiorevaluations form">
<?php echo $this->Form->create('Behaveiorevaluation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Behaveiorevaluation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('office_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('self');
		echo $this->Form->input('pear');
		echo $this->Form->input('head');
		echo $this->Form->input('student');
		echo $this->Form->input('period_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Behaveiorevaluation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Behaveiorevaluation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Behaveiorevaluations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
