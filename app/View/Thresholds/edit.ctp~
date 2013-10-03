<h2><?php echo __('Edit Threshold'); ?></h2>
<?php echo $this->Form->create('Threshold', array('url' => array('action' => 'edit'), 'enctype' => 'multipart/form-data')); ?>
	
	<?php echo $this->Form->input('id');?>
	<table> 
		<tr> <td> <?php echo $this->Form->input('performance'); ?> </td> 
		<tr> <td> <?php echo $this->Form->input('lower'); ?></td></tr>
		<tr> <td> <?php echo $this->Form->input('upper'); ?> </td> </tr>
		<tr> <td> <?php echo $this->Form->input('background',array('type'=>'file')); ?> </td> </tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr>
	</table> 
	
<p class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Threshold.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Threshold.id'))); ?>
	<?php echo $this->Html->link(__('List Thresholds'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
	
</p>
