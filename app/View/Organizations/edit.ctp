<h2><?php echo __('Edit Organization'); ?></h2>

<?php echo $this->Form->create('Organization'); ?>
	
		<table>
	<?php
		echo $this->Form->input('id');
		echo '<tr><td>'.$this->Form->input('organization_name').'</td></tr>';
		echo '<tr><td>'.$this->Form->input('mission').'</td>';
		echo '<td>'.$this->Form->input('vision').'</td><td>'.$this->Form->input('motto').'</td></tr>';
		echo '<tr><td colspan=2>'.$this->Form->input('value').'</td>';
		echo '<td>'.$this->Form->input('logo').'</td></tr>';
		//echo $this->Form->input('logo');
	?>
	
<tr><td><?php echo $this->Form->end(__('Submit')); ?></td></tr>
</table>

<!--
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Organization.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Organization.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
