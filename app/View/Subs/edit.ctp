<div class="subs form">
<?php echo $this->Form->create('Sub'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sub'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('year');
		echo $this->Form->input('activity_id');
		echo $this->Form->input('period_id');
		echo $this->Form->input('sub_activity');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sub.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Sub.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Subs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
