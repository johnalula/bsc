<h2><?php echo __('Add Activity'); ?></h2>
<?php echo $this->Form->create('Activity'); ?>
	<table>
	<tr><td><?php echo $this->Form->input('perspective_id',array('empty' => 'select a perspective'));?></td><td><?php echo $this->Form->input('objective_id',array('empty' => 'select an objective'));?></td> <td><?php echo $this->Form->input('measure_id',array('empty' => 'select a measure'));?></td></tr>
	<tr><td><?php echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?>
	</td><td><?php echo $this->Form->input('period_id');?></td></tr>
	<tr><td><?php echo $this->Form->input('activity',array('rows'=>'3'));?></td>
	<td colspan='2'><?php echo $this->Form->input('weight');?></td></tr>
	<tr><td><?php echo $this->Form->input('ways_of_evaluation',array('rows'=>'3'));?></td>
	<td colspan='2'><?php echo $this->Form->input('precondition_from_office',array('rows'=>'3'));?></td></tr>
	<tr><td><?php echo $this->Form->end(__('Submit')); ?>
	
<td  class="actions" colspan='2'>
<?php echo $this->Html->link(__('List Acts'), array('action' => 'index')); ?>
<?php echo $this->Html->link(__('List Perspectives'), array('controller' => 'perspectives', 'action' => 'index')); ?> 
<?php echo $this->Html->link(__('New Perspective'), array('controller' => 'perspectives', 'action' => 'add')); ?> 
</td></tr>
</table>
<?php
$this->Js->get('#ActivityObjectiveId')->event('change', 
	$this->Js->request(array(
		'controller'=>'measures',
		'action'=>'getByObjectivea'
		), array(
		'update'=>'#ActivityMeasureId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
$this->Js->get('#ActivityPerspectiveId')->event('change', 
	$this->Js->request(array(
		'controller'=>'objectives',
		'action'=>'getByPerspective'
		), array(
		'update'=>'#ActivityObjectiveId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);

?>
