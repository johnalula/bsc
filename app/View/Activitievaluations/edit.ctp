<div class="activitievaluations form">
<?php echo $this->Form->create('Activitievaluation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Activitievaluation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('activity_id');
		echo $this->Form->input('rank');
		echo $this->Form->input('in_quality');
		echo $this->Form->input('in_time');
		echo $this->Form->input('in_quntity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Activitievaluation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Activitievaluation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Activitievaluations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
