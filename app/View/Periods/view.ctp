<h2><?php  echo __('Period'); ?></h2>
	<table><tr><td><?php echo h($period['Period']['period_name']); ?></td></tr>
			&nbsp;
		<tr><td>
		<dd><?php echo __('Frequency'); ?>:
		<?php echo $this->Html->link($period['Frequency']['frequency_name'], array('controller' => 'frequencies', 'action' => 'view', $period['Frequency']['id'])); ?>
			&nbsp;
		</dd>
		<dd><?php echo __('Starting Day'); ?>:
		
			<?php echo h($period['Period']['starting_day']); ?>
			&nbsp;
		</dd>
		<dd><?php echo __('Ending Day'); ?>:
		
			<?php echo h($period['Period']['ending_day']); ?>
			&nbsp;
		</dd>
	</td></tr>
<tr><td class="actions">
	
	<?php echo $this->Html->link(__('Edit Period'), array('action' => 'edit', $period['Period']['id'])); ?> 
	<?php echo $this->Form->postLink(__('Delete Period'), array('action' => 'delete', $period['Period']['id']), null, __('Are you sure you want to delete # %s?', $period['Period']['id'])); ?> 
	<?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Period'), array('action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Frequencies'), array('controller' => 'frequencies', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Frequency'), array('controller' => 'frequencies', 'action' => 'add')); ?> 
	</td></tr>
</table>
