<div class="acts view">
<h2><?php  echo __('Act'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perspective'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activity['Perspective']['perspective_name'], array('controller' => 'perspectives', 'action' => 'view', $activity['Perspective']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo h($activity['Activity']['activity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($activity['Act']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ways Of Evaluation'); ?></dt>
		<dd>
			<?php echo h($activity['Act']['ways_of_evaluation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precondition From Office'); ?></dt>
		<dd>
			<?php echo h($activity['Act']['precondition_from_office']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Act'), array('action' => 'edit', $activity['Act']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Act'), array('action' => 'delete', $activity['Act']['id']), null, __('Are you sure you want to delete # %s?', $act['Act']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Act'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Perspectives'), array('controller' => 'perspectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perspective'), array('controller' => 'perspectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
