<h2><?php echo __('Add Indicator'); ?></h2>

<?php echo $this->Form->create('Indicator'); ?>
	
		
	<?php
		echo $this->Form->input('indicator_name');
		echo $this->Form->input('area',array('type'=>'select','options'=>$idicates));
		echo $this->Form->input('weight');
		echo $this->Form->input('description');
	?>

<?php echo $this->Form->end(__('Submit')); ?>

<?php echo $this->Html->link(__('List Indicators'), array('action' => 'index')); ?>
</div>


