<h2><?php echo __('Edit Theme'); ?></h2>
<?php echo $this->Form->create('Theme'); ?>
	
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('stategic_theme', array('rows'=>'3'));
		echo $this->Form->input('description', array('rows'=>'3'));
		echo $this->Form->input('result', array('rows'=>'3'));
		echo $this->Form->input('Objective');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Theme.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Theme.id'))); ?>
	<?php echo $this->Html->link(__('List Themes'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
</p>
