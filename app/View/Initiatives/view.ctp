<h2><?php  echo __('Initiative'); ?></h2>
	<table><tr><td>
		<h3><?php echo h($initiative['Initiative']['initiative_name']); ?></h3>
		</td></tr>
<tr><td>
		<dd><?php echo __('Initiative Description'); ?>:
		
			<h4><?php echo h($initiative['Initiative']['initiative_description']); ?></h4>
			
		</dd>
		<dd><?php echo __('Initiative Importance'); ?>:
		
			<h4><?php echo h($initiative['Initiative']['initiative_importance']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Deliverable'); ?>:
		
			<h4><?php echo h($initiative['Initiative']['deliverable']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Budget'); ?>:
		
			<d><?php echo h($initiative['Initiative']['budget']); ?></d>
			&nbsp;
		</dd>
		
		<dd><?php echo __('Start Date'); ?>:
		
			<d><?php echo h($initiative['Initiative']['start_date']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('End Date'); ?>:
		
			<d><?php echo h($initiative['Initiative']['end_date']); ?></d>
			&nbsp;
		</dd>
	</td></tr>
<tr><td class="actions">
	<?php echo $this->Html->link(__('Edit Initiative'), array('action' => 'edit', $initiative['Initiative']['id'])); ?>
	<?php echo $this->Form->postLink(__('Delete Initiative'), array('action' => 'delete', $initiative['Initiative']['id']), null, __('Are you sure you want to delete # %s?', $initiative['Initiative']['id'])); ?> 
	<?php echo $this->Html->link(__('List Initiatives'), array('action' => 'index')); ?>
	<?php echo $this->Html->link(__('New Initiative'), array('action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?>
	<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?>
</td></tr><table>	
<div class="related">
	<hr><h3><?php echo __('Related Projects'); ?></h3><hr>
	<?php if (!empty($initiative['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Project Name'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($initiative['Project'] as $project): ?>
		<tr>
			
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td><?php echo $project['project_name']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>

	<tr><td class="actions">
		<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> 
</table>

<div class="related">
	<hr><h3><?php echo __('Related Objectives'); ?></h3><hr>
	<?php if (!empty($initiative['Objective'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Objective Name'); ?></th>
		<th><?php echo __('Objective Weight'); ?></th>
		<th><?php echo __('Objective Description'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($initiative['Objective'] as $objective): ?>
		<tr>
			
			<td><?php echo $objective['created']; ?></td>
			<td><?php echo $objective['modified']; ?></td>
			<td><?php echo $objective['objective_name']; ?></td>
			<td><?php echo $objective['objective_weight']; ?></td>
			<td><?php echo $objective['objective_description']; ?></td>
			
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
