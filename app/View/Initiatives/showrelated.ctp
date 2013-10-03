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
<table>	
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
			
			
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>

	
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'objectives', 'action' => 'showrelated', $objective['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
