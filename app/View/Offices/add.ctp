<h2><?php echo __('Add Office'); ?></h2>
<?php echo $this->Form->create('Office'); ?>
		
	<?php
		echo $this->Form->input('office_name',array('rows'=>'2'));
		echo $this->Form->input('office_id',array('label'=>'Reports To'));
		echo $this->Form->input('organization_id');
		//echo $this->Form->input('Objective');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Html->link(__('List Offices'), array('action' => 'index')); ?>
	
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
</p>
