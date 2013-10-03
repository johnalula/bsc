	<h2><?php echo __('Perspectives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('perspective_name'); ?></th>
			<th><?php echo $this->Paginator->sort('perspective_description'); ?></th>
			<th><?php echo $this->Paginator->sort('perspective_weight'); ?></th>
			
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($perspectives as $perspective): ?>
	<tr>
		
		<td><?php echo h($perspective['Perspective']['perspective_name']); ?>&nbsp;</td>
		<td><?php echo h($perspective['Perspective']['perspective_description']); ?>&nbsp;</td>
		<td><?php echo h($perspective['Perspective']['perspective_weight']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'showrelated', $perspective['Perspective']['id'])); ?>
			
		</td>
	</tr>
<?php endforeach; ?>
		
	<tr><td colspan="4">
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></h4>	</td></tr>

	<tr><td  class="paging" colspan="4">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>

	</table>
