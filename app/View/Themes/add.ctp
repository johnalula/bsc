<h2><?php echo __('Add Theme'); ?></h2>
<?php echo $this->Form->create('Theme'); ?>
	
		
	<?php
		echo $this->Form->input('stategic_theme',array('rows'=>'3'));
		echo $this->Form->input('description',array('rows'=>'3'));
		echo $this->Form->input('result',array('rows'=>'3'));
		         
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

