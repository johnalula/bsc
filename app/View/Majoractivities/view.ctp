<div class="majoractivities view">
<h2><?php  echo __('Majoractivity'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($majoractivity['Majoractivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($majoractivity['Majoractivity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($majoractivity['Majoractivity']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Name'); ?></dt>
		<dd>
			<?php echo h($majoractivity['Majoractivity']['activity_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity Weight'); ?></dt>
		<dd>
			<?php echo h($majoractivity['Majoractivity']['activity_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Measure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($majoractivity['Measure']['id'], array('controller' => 'measures', 'action' => 'view', $majoractivity['Measure']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Majoractivity'), array('action' => 'edit', $majoractivity['Majoractivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Majoractivity'), array('action' => 'delete', $majoractivity['Majoractivity']['id']), null, __('Are you sure you want to delete # %s?', $majoractivity['Majoractivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Majoractivities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Majoractivity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> </li>
	</ul>
</div>
