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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $perspective['Perspective']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $perspective['Perspective']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $perspective['Perspective']['id']), null, __('Are you sure you want to delete # %s?', $perspective['Perspective']['id'])); ?>
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
<tr><td class="actions" colspan="4">

		<?php echo $this->Html->link(__('New Perspective'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
                <?php echo $this->Html->link(__('Download'), array('action' => 'exportxls')); ?>
                <?php echo $this->Html->link(__('graphs'), array('action' => 'pie3d')); ?>
		</td></tr>
	</table>
