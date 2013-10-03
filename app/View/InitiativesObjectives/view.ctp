<div class="initiativesObjectives view">
<h2><?php  echo __('Initiatives Objective'); ?></h2>
	<dl>
		<dt><?php echo __('Initiative'); ?></dt>
		<dd>
			<?php echo $this->Html->link($initiativesObjective['Initiative']['id'], array('controller' => 'initiatives', 'action' => 'view', $initiativesObjective['Initiative']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objective'); ?></dt>
		<dd>
			<?php echo $this->Html->link($initiativesObjective['Objective']['id'], array('controller' => 'objectives', 'action' => 'view', $initiativesObjective['Objective']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Initiatives Objective'), array('action' => 'edit', $initiativesObjective['InitiativesObjective']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Initiatives Objective'), array('action' => 'delete', $initiativesObjective['InitiativesObjective']['id']), null, __('Are you sure you want to delete # %s?', $initiativesObjective['InitiativesObjective']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Initiatives Objectives'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Initiatives Objective'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Initiatives'), array('controller' => 'initiatives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Initiative'), array('controller' => 'initiatives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
