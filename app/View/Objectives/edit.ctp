<h2><?php echo __('Edit Objective'); ?></h2>
<?php echo $this->Form->create('Objective'); ?>			
	<?php echo $this->Form->input('id'); ?>
	<table> 
		<tr><td> <?php echo $this->Form->input('perspective_id'); ?> </td></tr>
		<tr> <td> <?php echo $this->Form->input('objective_name');?> </td> <td> <?php echo $this->Form->input('objective_weight');?> </td></tr>
		<tr> <td colspan ="2"> <?php echo $this->Form->input('objective_description',array('rows'=>'3')); ?> </td></tr>
		  <tr> <td colspan=2> <?php echo $this->Form->input('outcome',array('rows'=>'3')); ?> </td> </tr>
                  <tr> <td colspan=2> <?php echo $this->Form->input('Theme'); ?> </td></tr>
		<tr> <td> <?php echo $this->Form->end(__('Submit')); ?> </td> <td class="actions"><li><?php echo $this->Html->link(__('List Objectives'), array('action' => 'index')); ?></li></td></tr>
	</table> 
	
	</fieldset>

</div>

