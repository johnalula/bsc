<h2><?php  echo __('Perspective'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($perspective['Perspective']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($perspective['Perspective']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($perspective['Perspective']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perspective Name'); ?></dt>
		<dd>
			<?php echo h($perspective['Perspective']['perspective_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perspective Weight'); ?></dt>
		<dd>
			<?php echo h($perspective['Perspective']['perspective_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Perspective Description'); ?></dt>
		<dd>
			<?php echo h($perspective['Perspective']['perspective_description']); ?>
			&nbsp;
		</dd>
	</dl>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Perspective'), array('action' => 'edit', $perspective['Perspective']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Perspective'), array('action' => 'delete', $perspective['Perspective']['id']), null, __('Are you sure you want to delete # %s?', $perspective['Perspective']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Perspectives'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Perspective'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Objectives'); ?></h3>
	<?php if (!empty($perspective['Objective'])): ?>
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
		foreach ($perspective['Objective'] as $objective): ?>
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
