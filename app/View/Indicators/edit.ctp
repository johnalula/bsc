<h2><?php echo __('Edit Indicator'); ?></h2>
<?php echo $this->Form->create('Indicator'); ?>
	
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('indicator_name');
		echo $this->Form->input('area',array('type'=>'select','options'=>$idicates));
		echo $this->Form->input('weight');
		echo $this->Form->input('description');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<div class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Indicator.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Indicator.id'))); ?>
	<?php echo $this->Html->link(__('List Indicators'), array('action' => 'index')); ?>
</div>
