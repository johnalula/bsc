<h2><?php echo __('Add Activitievaluation'); ?></h2>
<?php echo $this->Form->create('Activitievaluation'); ?>
	<table><tr><td>	<?php echo $this->Form->input('activity_id');?></td>
	<td colspan ='2'>	<?php echo $this->Form->input('rank');?></td></tr>
	<tr><td><?php echo $this->Form->input('in_quality',array('rows'=>'3'));?></td>
	<td>	<?php echo $this->Form->input('in_time',array('rows'=>'3'));?></td>
	<td>	<?php echo $this->Form->input('in_quntity',array('rows'=>'3'));?></td></tr>
	<tr><td colspan ='3'><?php echo $this->Form->end(__('Submit')); ?></td></tr>
<tr><td class="actions" colspan ='3'>
	<?php echo $this->Html->link(__('List Activitievaluations'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> 
</td></tr></table>
