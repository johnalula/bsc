<div class="themes view">
<h2><?php  echo __('Theme'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($theme['Theme']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stategic Theme'); ?></dt>
		<dd>
			<?php echo h($theme['Theme']['stategic_theme']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($theme['Theme']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Result'); ?></dt>
		<dd>
			<?php echo h($theme['Theme']['result']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Theme'), array('action' => 'edit', $theme['Theme']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Theme'), array('action' => 'delete', $theme['Theme']['id']), null, __('Are you sure you want to delete # %s?', $theme['Theme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Themes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Theme'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Objectives'); ?></h3>
	<?php if (!empty($theme['Objective'])): ?>
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
		<th><?php echo __('Outcome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($theme['Objective'] as $objective): ?>
		<tr>
			<td><?php echo $objective['id']; ?></td>
			<td><?php echo $objective['created']; ?></td>
			<td><?php echo $objective['modified']; ?></td>
			<td><?php echo $objective['objective_name']; ?></td>
			<td><?php echo $objective['objective_weight']; ?></td>
			<td><?php echo $objective['objective_description']; ?></td>
			<td><?php echo $objective['perspective_id']; ?></td>
			<td><?php echo $objective['organization_id']; ?></td>
			<td><?php echo $objective['outcome']; ?></td>
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
