<h2><?php echo __('Edit Office'); ?></h2>
<?php echo $this->Form->create('Office'); ?>
	
	<?php
		echo $this->Form->input('id');
		
		echo $this->Form->input('Objective');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>
</div>
