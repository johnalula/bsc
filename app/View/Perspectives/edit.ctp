<h2><?php echo __('Edit Perspective'); ?></h2>
<?php echo $this->Form->create('Perspective'); ?>
	
		
	<?php echo $this->Form->input('id');?>
	<table> 
		<tr> <td> <?php echo $this->Form->input('perspective_name');?> </td> <td> <?php echo $this->Form->input('perspective_weight');?> </td></tr>
		<tr> <td colspan=2> <?php echo $this->Form->input('perspective_description'); ?> </td></tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr>
	</table> 
