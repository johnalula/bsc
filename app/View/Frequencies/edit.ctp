<h2><?php echo __('Edit Frequency'); ?></h2>
<?php echo $this->Form->create('Frequency'); ?>
		<?php echo $this->Form->input('id'); ?>
	<table>	
	
		<tr><td><?php echo $this->Form->input('frequency_name'); ?></td> <td><?php echo $this->Form->input('number_of_days');?> </td></tr>
		<tr><td><?php echo $this->Form->input('description'); ?> </td></tr>
		<tr><td><?php echo $this->Form->end(__('Submit')); ?></td></tr>
		
<tr>	
<td class="actions">
	

		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Frequency.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Frequency.id'))); ?>
		<?php echo $this->Html->link(__('List Frequencies'), array('action' => 'index')); ?>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> 
	</td></tr></table>
