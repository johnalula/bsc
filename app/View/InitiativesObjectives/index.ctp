<div class="initiativesObjectives index">
	<h2><?php echo __('Initiatives Objectives'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('initiative_id'); ?></th>
			<th><?php echo $this->Paginator->sort('objective_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($initiativesObjectives as $initiativesObjective): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($initiativesObjective['Initiative']['id'], array('controller' => 'initiatives', 'action' => 'view', $initiativesObjective['Initiative']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($initiativesObjective['Objective']['id'], array('controller' => 'objectives', 'action' => 'view', $initiativesObjective['Objective']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $initiativesObjective['InitiativesObjective']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $initiativesObjective['InitiativesObjective']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $initiativesObjective['InitiativesObjective']['id']), null, __('Are you sure you want to delete # %s?', $initiativesObjective['InitiativesObjective']['id'])); ?>
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
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Initiatives Objective'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Initiatives'), array('controller' => 'initiatives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Initiative'), array('controller' => 'initiatives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
