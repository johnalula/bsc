<h2><?php echo __('Add Perspective'); ?></h2>
<?php echo $this->Form->create('Perspective'); ?>
	
		
	<table> 
		<tr> <td colspan =2> <?php echo $this->Form->input('perspective_name');?> </td> <td> <?php echo $this->Form->input('perspective_weight');?> </td></tr>
		<tr> <td colspan =3> <?php echo $this->Form->input('perspective_description'); ?> </td></tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td> <td class="actions"><li><?php echo $this->Html->link(__('Go to List'), array('action' => 'index')); ?></li></td></tr>
	</table> 
	
