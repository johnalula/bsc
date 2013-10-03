<h2><?php echo __('Activet Behaveiorevaluation'); ?></h2>
<?php echo $this->Form->create('Behaveiorevaluation'); ?>
	
		
	<?php
		echo $this->Form->input('office_id');
		echo $this->Form->input('user_id');
		/*echo $this->Form->input('self');
		echo $this->Form->input('pear');
		echo $this->Form->input('head');
		echo $this->Form->input('student');*/
		 echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));
		echo $this->Form->input('period_id');
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Html->link(__('List Behaveiorevaluations'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?>
	<?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> 
	
</p>
<?php
$this->Js->get('#BehaveiorevaluationOfficeId')->event('change', 
	$this->Js->request(array(
		'controller'=>'users',
		'action'=>'getByOffice'
		), array(
		'update'=>'#BehaveiorevaluationUserId',
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
