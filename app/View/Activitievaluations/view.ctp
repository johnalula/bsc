<div class="activitievaluations view">
<h2><?php  echo __('Activitievaluation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($activitievaluation['Activitievaluation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($activitievaluation['Activity']['id'], array('controller' => 'activities', 'action' => 'view', $activitievaluation['Activity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rank'); ?></dt>
		<dd>
			<?php echo h($activitievaluation['Activitievaluation']['rank']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Quality'); ?></dt>
		<dd>
			<?php echo h($activitievaluation['Activitievaluation']['in_quality']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Time'); ?></dt>
		<dd>
			<?php echo h($activitievaluation['Activitievaluation']['in_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Quntity'); ?></dt>
		<dd>
			<?php echo h($activitievaluation['Activitievaluation']['in_quntity']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Activitievaluation'), array('action' => 'edit', $activitievaluation['Activitievaluation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Activitievaluation'), array('action' => 'delete', $activitievaluation['Activitievaluation']['id']), null, __('Are you sure you want to delete # %s?', $activitievaluation['Activitievaluation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Activitievaluations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activitievaluation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
	</ul>
</div>
