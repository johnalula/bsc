<div class="subs view">
<h2><?php  echo __('Sub'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sub['Sub']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($sub['Sub']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sub['Activity']['activity'], array('controller' => 'activities', 'action' => 'view', $sub['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sub['Period']['period_name'], array('controller' => 'periods', 'action' => 'view', $sub['Period']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sub Activity'); ?></dt>
		<dd>
			<?php echo h($sub['Sub']['sub_activity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sub'), array('action' => 'edit', $sub['Sub']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sub'), array('action' => 'delete', $sub['Sub']['id']), null, __('Are you sure you want to delete # %s?', $sub['Sub']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Subs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sub'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
