<h2><?php echo __('Add Threshold'); ?></h2>                                                                                                                                                                                                            
<?php echo $this->Form->create('Threshold', array('url' => array('action' => 'add'), 'enctype' => 'multipart/form-data')); ?>
	
	<table> 
		<tr> <td> <?php echo $this->Form->input('performance'); ?> </td> 
		<tr> <td> <?php echo $this->Form->input('lower'); ?></td></tr>
		<tr> <td> <?php echo $this->Form->input('upper'); ?> </td> </tr>
		<tr> <td> <?php echo $this->Form->input('background_color',array('type'=>'file')); ?> </td> </tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr>
	</table> 
	
<p class="actions">
	<?php echo $this->Html->link(__('List Thresholds'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?>
	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?>
	
</p>
