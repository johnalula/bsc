	<h2><?php echo __('Majoractivities'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('activity_name'); ?></th>
			<th><?php echo $this->Paginator->sort('activity_weight'); ?></th>
			<th><?php echo $this->Paginator->sort('measure_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($majoractivities as $majoractivity): ?>
	<tr>
		
		<td><?php echo h($majoractivity['Majoractivity']['activity_name']); ?>&nbsp;</td>
		<td><?php echo h($majoractivity['Majoractivity']['activity_weight']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($majoractivity['Measure']['measure_name'], array('controller' => 'measures', 'action' => 'view', $majoractivity['Measure']['id'])); ?>
		</td>
		<td class="actions">
                       <?php echo $this->Html->link(__('Accomplish'), array('action' => 'accomplishment', $majoractivity['Majoractivity']['id'])); ?>
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $majoractivity['Majoractivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $majoractivity['Majoractivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $majoractivity['Majoractivity']['id']), null, __('Are you sure you want to delete # %s?', $majoractivity['Majoractivity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
		
	<tr> <td colspan='4'>
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</h4></td></tr>

	<tr> <td class="paging" colspan='4'>
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>
<tr> <td class="actions" colspan="4"> 
		<?php echo $this->Html->link(__('New Majoractivity'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 	      	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?>
                <?php echo $this->Html->link(__('Download'), array('action' => 'exportxls')); ?>
	</td></tr>
	</table>

