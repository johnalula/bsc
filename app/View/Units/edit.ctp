<h2><?php echo __('Edit Unit'); ?></h2>
<?php echo $this->Form->create('Unit'); ?>	
	<?php echo $this->Form->input('id');?>
	<table> 
		<tr> <td> <?php echo $this->Form->input('name'); ?></td></tr> <tr> <td> <?php echo $this->Form->input('description',array('rows'=>'3'));?></td></tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr>
	
	
<tr><td class="actions">
	

		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Unit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Unit.id'))); ?>
		<?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
	</td></tr></table>
