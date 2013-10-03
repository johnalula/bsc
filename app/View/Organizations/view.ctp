<div class="organizations view">
<h2><?php  echo __('Organization'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Organization Name'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['organization_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mission'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['mission']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vision'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['vision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motto'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['motto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Logo'); ?></dt>
		<dd>
			<?php echo h($organization['Organization']['logo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Organization'), array('action' => 'edit', $organization['Organization']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Organization'), array('action' => 'delete', $organization['Organization']['id']), null, __('Are you sure you want to delete # %s?', $organization['Organization']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Organizations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Organization'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Objectives'); ?></h3>
	<?php if (!empty($organization['Objective'])): ?>
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
		foreach ($organization['Objective'] as $objective): ?>
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
<div class="related">
	<h3><?php echo __('Related Offices'); ?></h3>
	<?php if (!empty($organization['Office'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Office Name'); ?></th>
		<th><?php echo __('Office Id'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($organization['Office'] as $office): ?>
		<tr>
			<td><?php echo $office['id']; ?></td>
			<td><?php echo $office['created']; ?></td>
			<td><?php echo $office['modified']; ?></td>
			<td><?php echo $office['office_name']; ?></td>
			<td><?php echo $office['office_id']; ?></td>
			<td><?php echo $office['organization_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'offices', 'action' => 'view', $office['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'offices', 'action' => 'edit', $office['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'offices', 'action' => 'delete', $office['id']), null, __('Are you sure you want to delete # %s?', $office['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
