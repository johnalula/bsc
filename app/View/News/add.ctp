<h2><?php echo __('Add News'); ?></h2>
<?php echo $this->Form->create('News'); ?>	
	<table> 
		<tr> <td> <?php echo $this->Form->input('title');?> </td></tr>
    		<tr><td> <?php echo $this->Form->input('datail',array('rows'=>'8')); ?> </td></tr>
		
<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td> </tr> 
    	
<tr><td class="actions">
	<?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?>
</td></tr>	
</table> 
	
