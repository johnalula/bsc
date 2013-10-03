<div class="periods view">
<h2><?php  echo __('Period'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($period['Period']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($period['Period']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($period['Period']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period Name'); ?></dt>
		<dd>
			<?php echo h($period['Period']['period_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Frequency'); ?></dt>
		<dd>
			<?php echo $this->Html->link($period['Frequency']['id'], array('controller' => 'frequencies', 'action' => 'view', $period['Frequency']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Starting Day'); ?></dt>
		<dd>
			<?php echo h($period['Period']['starting_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ending Day'); ?></dt>
		<dd>
			<?php echo h($period['Period']['ending_day']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Period'), array('action' => 'edit', $period['Period']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Period'), array('action' => 'delete', $period['Period']['id']), null, __('Are you sure you want to delete # %s?', $period['Period']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Frequencies'), array('controller' => 'frequencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frequency'), array('controller' => 'frequencies', 'action' => 'add')); ?> </li>
	</ul>
</div>
