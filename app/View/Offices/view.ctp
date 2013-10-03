<h2><?php  echo __('Office @ Adigrat University'); ?></h2>
	<table>
		<tr><td><h3><?php echo __('Office Name: '); ?><?php echo h($office['Office']['office_name']); ?><h3></td></tr>
	        <tr><td><dd><h3><?php echo __('Reports To:'); ?><?php echo h($office['Parentoffice']['office_name']); ?>
			<!--<?php echo $this->Html->link($office['parentoffice']['office_name'], array('controller' => 'offices', 'action' => 'view', $office['Office']['office_id'])); ?>--></h3></dd></td></tr>

<tr>
<td class="actions">
	<?php echo $this->Html->link(__('Edit Office'), array('action' => 'edit', $office['Office']['id'])); ?> 
	<?php echo $this->Form->postLink(__('Delete Office'), array('action' => 'delete', $office['Office']['id']), null, __('Are you sure you want to delete # %s?', $office['Office']['id'])); ?> 
	<?php echo $this->Html->link(__('List Offices'), array('action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Office'), array('action' => 'add')); ?> 
</td></tr></table>
		
<hr>
	<h3><?php echo __('Related Objectives'); ?></h3>
<hr>
	<?php if (!empty($office['Objective'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Objective Name'); ?></th>
		<th><?php echo __('Objective Weight'); ?></th>
		<th><?php echo __('Objective Description'); ?></th>
		<th><?php echo __('Perspective Id'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($office['Objective'] as $objective): ?>
		<tr>
			
			<td><?php echo $objective['objective_name']; ?></td>
			<td><?php echo $objective['objective_weight']; ?></td>
			<td><?php echo $objective['objective_description']; ?></td>
			<td><?php echo $objective['perspective_id']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'objectives', 'action' => 'view', $objective['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'objectives', 'action' => 'edit', $objective['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'objectives', 'action' => 'delete', $objective['id']), null, __('Are you sure you want to delete # %s?', $objective['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
