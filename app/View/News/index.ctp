	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	
	<?php
	foreach ($news as $news): ?>
	<tr><td><h3><?php echo $this->Html->link($news['News']['title'], array('action' => 'view', $news['News']['id'])); ?>&nbsp;</h3>
	<?php echo h($news['News']['datail']); ?></td></tr>
		<!--<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), null, __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
		</td>
	</tr>-->
<?php endforeach; ?>
	
	<tr><td class="paging">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td></tr>

	<tr><td  class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr></table>
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?></li>
	</ul>
</div>-->
