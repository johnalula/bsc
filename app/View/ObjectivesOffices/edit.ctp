<div class="objectivesOffices form">
<?php echo $this->Form->create('ObjectivesOffice'); ?>
	<fieldset>
		<legend><?php echo __('Edit Objectives Office'); ?></legend>
	<?php
		echo $this->Form->input('office_id');
		echo $this->Form->input('objective_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ObjectivesOffice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ObjectivesOffice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Objectives Offices'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
