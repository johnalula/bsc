<h2><?php echo __('Add Project'); ?></h2>
<?php echo $this->Form->create('Project'); ?>
	<?php	echo $this->Form->input('initiative_id');
		echo $this->Form->input('project_name');
		
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?>
</p>
