<h2><?php echo __('Add Activityevaluationvalue'); ?></h2>
<?php echo $this->Form->create('Activityevaluationvalue'); ?>
	
	<?php
		echo $this->Form->input('office_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));
		echo $this->Form->input('period_id');
		echo $this->Form->input('activity_id');
		/*echo $this->Form->input('self');
		echo $this->Form->input('pear');
		echo $this->Form->input('head');
		echo $this->Form->input('student');*/
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Html->link(__('List Activityevaluationvalues'), array('action' => 'index')); ?></li>
	<?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
	<?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
	<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
	<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> 
</p>
