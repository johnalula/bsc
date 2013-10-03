<div class="initiativesObjectives form">
<?php echo $this->Form->create('InitiativesObjective'); ?>
	<fieldset>
		<legend><?php echo __('Add Initiatives Objective'); ?></legend>
	<?php
		echo $this->Form->input('initiative_id');
		echo $this->Form->input('objective_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Initiatives Objectives'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Initiatives'), array('controller' => 'initiatives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Initiative'), array('controller' => 'initiatives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
