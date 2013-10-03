<h2><?php echo __('Edit Target'); ?></h2>
<?php echo $this->Form->create('Target'); ?>
		<?php echo $this->Form->input('id'); ?>
	<table> 
		<tr><td> <?php echo $this->Form->input('objective_id'); ?> </td><td> <?php echo $this->Form->input('measure_id'); ?> </td><td> <?php echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?> </td> <td> <?php echo $this->Form->input('period_id');?> </td></tr>
		<tr><td> <?php echo $this->Form->input('baseline'); ?> </td><td> <?php echo $this->Form->input('target'); ?> </td>  </td><!--<td> <?php echo $this->Form->input('actual_value'); ?>--> </td></tr> 
		<tr><td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr> 
<td class="actions">
	

		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Target.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Target.id'))); ?>
		<?php echo $this->Html->link(__('List Targets'), array('action' => 'index')); ?>
<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
</td></tr> 
</table> 
