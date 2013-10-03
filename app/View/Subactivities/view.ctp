<div class="subactivities view">
<h2><?php  __('Subactivity');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Plan Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['plan_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Month'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['month']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Week'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['week']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sub Activity'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['sub_activity']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Approved'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $subactivity['Subactivity']['is_approved']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Activitymonth'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link('Edit Subactivity', array('action' => 'edit', $subactivity['Subactivity']['id'])); ?> </li>
		
		<li><?php echo $this->Html->link('List Subactivities', array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Subactivity', array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link('List Activitymonths', array('controller' => 'activitymonths', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Activitymonth', array('controller' => 'activitymonths', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link('List Subactivityweaks', array('controller' => 'subactivityweaks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link('New Subactivityweak', array('controller' => 'subactivityweaks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Subactivityweaks');?></h3>
	<?php if (!empty($subactivity['Subactivityweak'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Subactivitydone'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Remark'); ?></th>
		<th><?php __('Subactivity Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($subactivity['Subactivityweak'] as $subactivityweak):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subactivityweak['id'];?></td>
			<td><?php echo $subactivityweak['subactivitydone'];?></td>
			<td><?php echo $subactivityweak['created'];?></td>
			<td><?php echo $subactivityweak['modified'];?></td>
			<td><?php echo $subactivityweak['remark'];?></td>
			<td><?php echo $subactivityweak['subactivity_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link('View', array('controller' => 'subactivityweaks', 'action' => 'view', $subactivityweak['id'])); ?>
				<?php echo $this->Html->link('Edit', array('controller' => 'subactivityweaks', 'action' => 'edit', $subactivityweak['id'])); ?>
				</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link('New Subactivityweak', array('controller' => 'subactivityweaks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
