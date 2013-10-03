	<h2><?php echo __('Themes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			
			<th><?php echo $this->Paginator->sort('stategic_theme'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('result'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($themes as $theme): ?>
	<tr>
		
		<td><?php echo h($theme['Theme']['stategic_theme']); ?>&nbsp;</td>
		<td><?php echo h($theme['Theme']['description']); ?>&nbsp;</td>
		<td><?php echo h($theme['Theme']['result']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $theme['Theme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $theme['Theme']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $theme['Theme']['id']), null, __('Are you sure you want to delete # %s?', $theme['Theme']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	
	<tr><td colspan=5>
	<h4><?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?></h4>	</td></tr>

	<tr><td class="paging" colspan=5>
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>
  
<tr><td class="actions" colspan=5>
	
		<?php echo $this->Html->link(__('New Theme'), array('action' => 'add')); ?>
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('download'), array('controller' => 'themes', 'action' => 'exportxls')); ?> 
	
</td></tr></table>

