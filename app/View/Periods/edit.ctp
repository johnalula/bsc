<h2><?php echo __('Edit Period'); ?></h2>
<?php echo $this->Form->create('Period'); ?>
	
	<?php echo $this->Form->input('id');?>
	<table> 
	<tr> <td> <?php echo $this->Form->input('period_name'); ?> </td> <td> <?php echo $this->Form->input('frequency_id'); ?> </td></tr>
	<tr> <td> <?php echo $this->Form->input('starting_day'); ?> </td> <td> <?php echo $this->Form->input('ending_day');  ?> </td></tr>
	<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr>
	
<tr> <td class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Period.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Period.id'))); ?>
	<?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Frequencies'), array('controller' => 'frequencies', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Frequency'), array('controller' => 'frequencies', 'action' => 'add')); ?> 
</td></tr></table> 
