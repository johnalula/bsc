<h2><?php echo __('Edit Initiative'); ?></h2>
<?php echo $this->Form->create('Initiative'); ?>	
	<?php echo $this->Form->input('id'); ?>
	<table>
		<tr><td><?php echo $this->Form->input('initiative_name');?> </td> <td><?php echo $this->Form->input('initiative_description',array('rows'=>'3')); ?> </td></tr>
		<tr><td><?php echo $this->Form->input('initiative_importance',array('rows'=>'3'));?> </td> <td><?php echo $this->Form->input('deliverable',array('rows'=>'3')); ?> </td></tr>
		<tr><td><?php echo $this->Form->input('budget'); ?> </td> <td><?php echo $this->Form->input('Office',array('multiple'=>true,'lable'=>'project_owner')); ?> </td></tr>
		<tr><td><?php echo $this->Form->input('Implimenter',array('multiple'=>true)); ?> </td> <td><?php echo $this->Form->input('Objective'); ?></td></tr>
		<tr><td><?php echo $this->Form->input('start_date'); ?>  </td> <td><?php echo $this->Form->input('end_date'); ?>  </td></tr>
		<tr><td><?php echo $this->Form->end(__('Submit')); ?> </td></tr>
	
<tr><td class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Initiative.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Initiative.id'))); ?>
		<?php echo $this->Html->link(__('List Initiatives'), array('action' => 'index')); ?>
		<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
	</td></tr>
</table>		
