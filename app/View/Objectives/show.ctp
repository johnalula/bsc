	<h2><?php echo __('Objectives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('perspective_id'); ?></th>
			<th><?php echo $this->Paginator->sort('objective_name'); ?></th>
			<th><?php echo $this->Paginator->sort('objective_description'); ?></th>
			<th><?php echo $this->Paginator->sort('objective_weight'); ?></th>
			
			
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($objectives as $objective): ?>
	<tr>
		<td>
	<?php echo $this->Html->link($objective['Perspective']['perspective_name'], array('controller' => 'perspectives', 'action' => 'view', $objective['Perspective']['id'])); ?>
		</td>
		<td><?php echo h($objective['Objective']['objective_name']); ?>&nbsp;</td>
		<td><?php echo h($objective['Objective']['objective_description']); ?>&nbsp;</td>
		<td><?php echo h($objective['Objective']['objective_weight']); ?>&nbsp;</td>
		
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'showrelated', $objective['Objective']['id'])); ?>
			
                       
		</td>
	</tr>
<?php endforeach; ?>
	<tr> <td colspan= "6">
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></h4>	</td></tr>

	<tr> <td class="paging" colspan= "6">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>

	
	</table>
	

