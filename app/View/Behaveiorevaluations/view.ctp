<div class="behaveiorevaluations view">
<h2><?php  echo __('Behaveiorevaluation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($behaveiorevaluation['Behaveiorevaluation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Office'); ?></dt>
		<dd>
			<?php echo $this->Html->link($behaveiorevaluation['Office']['office_name'], array('controller' => 'offices', 'action' => 'view', $behaveiorevaluation['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($behaveiorevaluation['User']['first_name'], array('controller' => 'users', 'action' => 'view', $behaveiorevaluation['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Self'); ?></dt>
		<dd>
			<?php echo h($behaveiorevaluation['Behaveiorevaluation']['self']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pear'); ?></dt>
		<dd>
			<?php echo h($behaveiorevaluation['Behaveiorevaluation']['pear']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Head'); ?></dt>
		<dd>
			<?php echo h($behaveiorevaluation['Behaveiorevaluation']['head']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo h($behaveiorevaluation['Behaveiorevaluation']['student']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Period'); ?></dt>
		<dd>
			<?php echo $this->Html->link($behaveiorevaluation['Period']['period_name'], array('controller' => 'periods', 'action' => 'view', $behaveiorevaluation['Period']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Behaveiorevaluation'), array('action' => 'edit', $behaveiorevaluation['Behaveiorevaluation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Behaveiorevaluation'), array('action' => 'delete', $behaveiorevaluation['Behaveiorevaluation']['id']), null, __('Are you sure you want to delete # %s?', $behaveiorevaluation['Behaveiorevaluation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Behaveiorevaluations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Behaveiorevaluation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periods'), array('controller' => 'periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period'), array('controller' => 'periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
