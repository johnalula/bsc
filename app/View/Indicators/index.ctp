<h2><?php echo __('Indicators'); ?></h2>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('indicator_name'); ?></th>
			<th><?php echo $this->Paginator->sort('area'); ?></th>
			<th><?php echo $this->Paginator->sort('weight'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($indicators as $indicator): ?>
	<tr>
		
		<td><?php echo h($indicator['Indicator']['indicator_name']); ?>&nbsp;</td>
		<td><?php echo h($indicator['Indicator']['area']); ?>&nbsp;</td>
		<td><?php echo h($indicator['Indicator']['weight']); ?>&nbsp;</td>
		<td><?php echo h($indicator['Indicator']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $indicator['Indicator']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $indicator['Indicator']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $indicator['Indicator']['id']), null, __('Are you sure you want to delete # %s?', $indicator['Indicator']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

<div class="actions">
	<?php echo $this->Html->link(__('New Indicator'), array('action' => 'add')); ?>
</div>
