<h2><?php echo __('Add Frequency'); ?></h2>
<?php echo $this->Form->create('Frequency'); ?>
		<table>	
	
		<tr><td><?php echo $this->Form->input('frequency_name'); ?></td> <td><?php echo $this->Form->input('number_of_days');?> </td></tr>
		<tr><td ><?php echo $this->Form->input('description'); ?> </td></tr>
		<tr><td><?php echo $this->Form->end(__('Submit')); ?></td></tr>
	</table>	
	
