<div class="objectivesOffices view">
<h2><?php  echo __('Objectives Office'); ?></h2>
	<dl>
		<dt><?php echo __('Office'); ?></dt>
		<dd>
			<?php echo $this->Html->link($objectivesOffice['Office']['id'], array('controller' => 'offices', 'action' => 'view', $objectivesOffice['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Objective'); ?></dt>
		<dd>
			<?php echo $this->Html->link($objectivesOffice['Objective']['id'], array('controller' => 'objectives', 'action' => 'view', $objectivesOffice['Objective']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Objectives Office'), array('action' => 'edit', $objectivesOffice['ObjectivesOffice']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Objectives Office'), array('action' => 'delete', $objectivesOffice['ObjectivesOffice']['id']), null, __('Are you sure you want to delete # %s?', $objectivesOffice['ObjectivesOffice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives Offices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objectives Office'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
