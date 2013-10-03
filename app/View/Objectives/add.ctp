<h2><?php echo __('Add Objective'); ?></h2>
<?php echo $this->Form->create('Objective'); ?>
	
	<table> 
		<tr>  <td colspan="2"> <?php echo $this->Form->input('perspective_id'); ?> </td><td rowspan="4"> <?php echo $this->Form->input('Theme',array('size' => 12)); ?> </td></tr>
		<tr> <td> <?php echo $this->Form->input('objective_name');?> </td> <td> <?php echo $this->Form->input('objective_weight');?> </td></tr>
		<tr> <td > <?php echo $this->Form->input('objective_description',array('rows'=>'2')); ?> </td>  <td > <?php echo $this->Form->input('outcome',array('rows'=>'2')); ?> </td> </tr>
		<!--<tr> <td> <?php echo $this->Form->input('Office'); ?> </td></tr>-->
		<tr> <td > <?php echo $this->Form->end(__('Submit')); ?> </td > <td class="actions"><li><?php echo $this->Html->link(__('Back to List'), array('action' => 'index')); ?></li></td> </tr>
	</table> 
	

