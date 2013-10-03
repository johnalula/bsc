<h2><?php echo __('Add Projects Task'); ?></h2>
<?php echo $this->Form->create('ProjectsTask'); ?>
	<table>
	<tr><td><?php echo $this->Form->input('initiative_id',array('empty' => 'select an initiative'));?></td>
	    <td><?php	echo $this->Form->input('project_id',array('empty' => 'select a project'));?></td></tr>
	<tr><td colspan ="2"><?php	echo $this->Form->input('task_name');?></td></tr>
		
	
	
<tr><td colspan ="2"><?php echo $this->Form->end(__('Submit')); ?></td></tr>
</table>
<p class="actions">
	<?php echo $this->Html->link(__('List Projects Tasks'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> 
</p>
<?php
$this->Js->get('#ProjectsTaskInitiativeId')->event('change', 
	$this->Js->request(array(
		'controller'=>'projects',
		'action'=>'getByInitiative'
		), array(
		'update'=>'#ProjectsTaskProjectId',
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
