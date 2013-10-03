<div class="initiatives view">
<h2><?php  echo __('Initiative'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initiative Name'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['initiative_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initiative Description'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['initiative_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initiative Importance'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['initiative_importance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deliverable'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['deliverable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Budget'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['budget']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project Owner'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['project_owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Implimenter'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['implimenter']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($initiative['Initiative']['end_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Initiative'), array('action' => 'edit', $initiative['Initiative']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Initiative'), array('action' => 'delete', $initiative['Initiative']['id']), null, __('Are you sure you want to delete # %s?', $initiative['Initiative']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Initiatives'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Initiative'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($initiative['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Project Name'); ?></th>
		<th><?php echo __('Initiative Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($initiative['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id']; ?></td>
			<td><?php echo $project['created']; ?></td>
			<td><?php echo $project['modified']; ?></td>
			<td><?php echo $project['project_name']; ?></td>
			<td><?php echo $project['initiative_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Objectives'); ?></h3>
	<?php if (!empty($initiative['Objective'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Objective Name'); ?></th>
		<th><?php echo __('Objective Weight'); ?></th>
		<th><?php echo __('Objective Description'); ?></th>
		<th><?php echo __('Perspective Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($initiative['Objective'] as $objective): ?>
		<tr>
			<td><?php echo $objective['id']; ?></td>
			<td><?php echo $objective['created']; ?></td>
			<td><?php echo $objective['modified']; ?></td>
			<td><?php echo $objective['objective_name']; ?></td>
			<td><?php echo $objective['objective_weight']; ?></td>
			<td><?php echo $objective['objective_description']; ?></td>
			<td><?php echo $objective['perspective_id']; ?></td>
			<td><?php echo $objective['organization_id']; ?></td>
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
