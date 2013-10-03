<div class="activityevaluationvalues view">
<h2><?php  echo __('Activityevaluationvalue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activityevaluationvalue['Activityevaluationvalue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityevaluationvalue['Office']['office_name'], array('controller' => 'offices', 'action' => 'view', $activityevaluationvalue['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activityevaluationvalue['User']['first_name'], array('controller' => 'users', 'action' => 'view', $activityevaluationvalue['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Self'); ?></dt>
		<dd>
			<?php echo h($activityevaluationvalue['Activityevaluationvalue']['self']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pear'); ?></dt>
		<dd>
			<?php echo h($activityevaluationvalue['Activityevaluationvalue']['pear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head'); ?></dt>
		<dd>
			<?php echo h($activityevaluationvalue['Activityevaluationvalue']['head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo h($activityevaluationvalue['Activityevaluationvalue']['student']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activityevaluationvalue'), array('action' => 'edit', $activityevaluationvalue['Activityevaluationvalue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activityevaluationvalue'), array('action' => 'delete', $activityevaluationvalue['Activityevaluationvalue']['id']), null, __('Are you sure you want to delete # %s?', $activityevaluationvalue['Activityevaluationvalue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activityevaluationvalues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activityevaluationvalue'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
