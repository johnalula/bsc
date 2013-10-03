<h2><?php echo __('Add Target'); ?></h2>
<?php echo $this->Form->create('Target'); ?>

	<table> 
		<tr><td> <?php echo $this->Form->input('objective_id',array('empty' => 'select an objective')); ?> </td><td> <?php echo $this->Form->input('measure_id',array('empty' => 'select a measure')); ?> </td><td> <?php echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?> </td> <td> <?php echo $this->Form->input('period_id');?> </td></tr>
		<tr><td> <?php echo $this->Form->input('baseline'); ?> </td><td> <?php echo $this->Form->input('target'); ?> </td>  <!--><td> <?php //echo $this->Form->input('actual_value'); ?> </td>--></tr> 
		<tr><td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr> 
		
	
<tr><td class="actions">
	<?php echo $this->Html->link(__('List Targets'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
	</td></tr> 
</table> 
<?php
$this->Js->get('#TargetObjectiveId')->event('change', 
	$this->Js->request(array(
		'controller'=>'measures',
		'action'=>'getByObjective'
		), array(
		'update'=>'#TargetMeasureId',
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
