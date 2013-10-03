<h2><?php echo __('Add Sub activity'); ?></h2>
<?php echo $this->Form->create('Sub'); ?>
	<table><tr><td>	
	<?php echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?></td></tr>
		
	<tr><td><?php echo $this->Form->input('period_id');?></td></tr>
	<tr><td><?php echo $this->Form->input('activity_id');?></td></tr>
	<tr><td><?php echo $this->Form->input('sub_activity',array('rows'=>'3'));?></td></tr>
	<tr><td><?php echo $this->Form->input('starting_date')?></td>
	<td><?php echo $this->Form->input('ending_date');?></td></tr>
	
	
<tr><td><?php echo $this->Form->end(__('Submit')); ?></td></tr>
</table>
<p class="actions">
	<?php echo $this->Html->link(__('List Subs'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?>
	<?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> 
</p>
