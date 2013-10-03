<h2><?php echo __('Accomplishment Majoractivity'); ?></h2>
<?php echo $this->Form->create('Majoractivity'); ?>
	<?php echo $this->Form->input('id'); ?>
	<table><tr><td><?php echo $this->Form->input('ac_in_quntity');?></td>
               <td><?php echo $this->Form->input('ac_in_quality');?> </td>
               <td><?php echo $this->Form->input('ac_in_cost'); ?> </td>
               <td><?php echo $this->Form->input('ac_in_time'); ?>  </td> </tr>
                <!--<tr><td colspan="4"><?php echo $this->Form->input('acomplishment'); ?> </td></tr>-->
		<tr><td><?php echo $this->Form->end(__('Submit')); ?> </td></ r>
	
	
	
<tr><td class="actions">
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Majoractivity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Majoractivity.id'))); ?>
		<?php echo $this->Html->link(__('List Majoractivities'), array('action' => 'index')); ?>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
</td></tr>	
</table>
