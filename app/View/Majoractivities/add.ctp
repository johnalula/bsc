<h2><?php echo __('Add Majoractivity'); ?></h2>
<?php echo $this->Form->create('Majoractivity'); ?>
	<table>
        <tr>  <td><?php echo $this->Form->input('objective_id'); ?> </td>
	 	<td><?php echo $this->Form->input('measure_id'); ?> </td> 
              <td  colspan="2" rowspan='2'><?php echo $this->Form->input('User',array(
            'type' => 'select',
            'multiple' => true,
            'label' => "Resoponse person (Select multiple entries with CTRL)",
            'size' => 5)); ?></td>
        </tr>
        <tr>    <td><?php echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?></td>
		<td><?php echo $this->Form->input('period_id');?></td>
	</tr>
        <tr>	<td><?php echo $this->Form->input('activity_name');?></td> 
		<td><?php echo $this->Form->input('activity_weight');?> </td>
		<td><?php echo $this->Form->input('baseline');?> </td>
     		<td><?php echo $this->Form->input('target');?></td>
		
	</tr>
     	<tr>	<td><?php echo $this->Form->input('in_quality');?></td> 
		<td><?php echo $this->Form->input('in_quntity');?></td> 
		<td><?php echo $this->Form->input('in_time');?></td> 
		<td><?php echo $this->Form->input('in_cost');?> </td>
	</tr>
     	
	<tr>	<td><?php echo $this->Form->end(__('Submit')); ?> </td>
	</tr>
<tr><td class="actions" colspan = '4'>
		<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Majoractivity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Majoractivity.id'))); ?>
		<?php echo $this->Html->link(__('List Majoractivities'), array('action' => 'index')); ?>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
</td></tr>	
</table> 
