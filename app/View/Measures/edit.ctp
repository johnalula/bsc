<h2><?php echo __('Edit Measure'); ?></h2>
<?php echo $this->Form->create('Measure'); ?>
	
	<?php echo $this->Form->input('id'); ?>
	<table>
		<tr><td colspan=3><?php echo $this->Form->input('objective_id');?></td> </tr>
	<tr><td colspan=2> <?php echo $this->Form->input('measure_name'); ?></td>
                <td><?php echo $this->Form->input('unit_id'); ?> </td> <td> <?php echo $this->Form->input('frequency_id'); ?></td> </tr>
                
		<tr><td colspan=2> <?php echo $this->Form->input('description',array('rows'=>'3')); ?></td> <td> <?php echo $this->Form->input('measure_type',array('rows'=>'3')); ?></td> <td> <?php echo $this->Form->input('measure_weight'); ?></td></tr>
		<tr><td> <?php echo $this->Form->input('formula',array('rows'=>'3')); ?></td> <td><?php echo $this->Form->input('polarity',array('rows'=>'3')); ?> </td> <td colspan=2> <?php echo $this->Form->input('data_source',array('rows'=>'3')); ?></td>  </tr>
		<tr> <td> <?php echo $this->Form->input('data_quality',array('rows'=>'3')); ?></td> <td  colspan=2> <?php echo $this->Form->input('data_collector',array('rows'=>'3'));  ?></td> <td> <?php echo $this->Form->input('baseline');  ?></td></tr>
		<tr><td colspan=4><?php echo $this->Form->input('rationalie',array('rows'=>'3')); ?></td> </tr>
		<tr><td class="actions" colspan="8"> <?php echo $this->Form->end(__('Submit')); ?> <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Measure.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Measure.id'))); ?>
		<?php echo $this->Html->link(__('List Measures'), array('action' => 'index')); ?></td> </tr>
</table>
