<h2><?php echo __('Add Unit'); ?></h2>
<?php echo $this->Form->create('Unit'); ?>
	<table> 
		<tr> <td> <?php echo $this->Form->input('name'); ?> </td> </tr>
                <tr> <td colspan=2> <?php echo $this->Form->input('description',array('rows'=>'3'));?></td></tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td> <td class="actions"><li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?></li></td></tr>
	</table>
