<h2><?php echo __('Edit News'); ?></h2>
<?php echo $this->Form->create('News'); ?>
	
		
	<?php echo $this->Form->input('id');?> 	
	<table> 
		<tr> <td> <?php echo $this->Form->input('title');?> </td> </tr>  
                <tr> <td> <?php echo $this->Form->input('datail');?> </td> </tr> 
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td> </tr> 
    	
<tr><td class="actions">
	<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))); ?>
	<?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?>
</td></tr>	
</table> 
