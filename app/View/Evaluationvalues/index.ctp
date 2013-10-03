<h2><?php echo __('Evaluationvalues'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('is_acadamic'); ?></th>
			<th><?php echo $this->Paginator->sort('type'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('remark'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($evaluationvalues as $evaluationvalue): ?>
	<tr>
		<td><?php echo h($evaluationvalue['Evaluationvalue']['id']); ?>&nbsp;</td>
		<td><?php echo h($evaluationvalue['Evaluationvalue']['is_acadamic']); ?>&nbsp;</td>
		<td><?php echo h($evaluationvalue['Evaluationvalue']['type']); ?>&nbsp;</td>
		<td><?php echo h($evaluationvalue['Evaluationvalue']['value']); ?>&nbsp;</td>
		<td><?php echo h($evaluationvalue['Evaluationvalue']['remark']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $evaluationvalue['Evaluationvalue']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $evaluationvalue['Evaluationvalue']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $evaluationvalue['Evaluationvalue']['id']), null, __('Are you sure you want to delete # %s?', $evaluationvalue['Evaluationvalue']['id'])); ?>
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

<p class="actions">
	<?php echo $this->Html->link(__('New Evaluationvalue'), array('action' => 'add')); ?>
</p>
