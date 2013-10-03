<h2><?php echo __('Add Evaluationvalue'); ?></h2>
<?php echo $this->Form->create('Evaluationvalue'); ?>
	
	<?php
		echo $this->Form->input('is_acadamic',array('type'=>'select','options'=>array('-------'=>'--------',1=>'Acdamic',0=>'Other')));
		echo $this->Form->input('type',array('type'=>'select','options'=>array('-------'=>'--------','self'=>'self','pear'=>'pear','head','head')));
		echo $this->Form->input('value');
		echo $this->Form->input('remark',array('rows'=>'2'));
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Html->link(__('List Evaluationvalues'), array('action' => 'index')); ?>
</p>
<?php
$this->Js->get('#EvaluationvalueIsAcadamic')->event('change', 
	$this->Js->request(array(
		'controller'=>'evaluationvalues',
		'action'=>'getByCategory'
		), array(
		'update'=>'#EvaluationvalueType',
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
