<h2><?php echo __('Add Period'); ?></h2>
<?php echo $this->Form->create('Period'); ?>
		
	<table> 
		<tr> <td> <?php echo $this->Form->input('period_name'); ?> </td> <td> <?php echo $this->Form->input('frequency_id'); ?> </td></tr>
		<tr> <td> <?php echo $this->Form->input('starting_day'); ?> </td> <td> <?php echo $this->Form->input('ending_day');  ?> </td></tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td class='actions'><td><li><?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?></li></td></tr>
	</table> 
	
