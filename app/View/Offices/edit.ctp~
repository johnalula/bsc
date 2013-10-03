<h2><?php echo __('Edit Office'); ?></h2>
<?php echo $this->Form->create('Office'); ?>
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('office_name');
		echo $this->Form->input('office_id');
		echo $this->Form->input('organization_id');
		echo $this->Form->input('Objective');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Office.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Office.id'))); ?>
	<?php echo $this->Html->link(__('List Offices'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
</p>
