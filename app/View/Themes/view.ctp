<h2><?php  echo __('Theme'); ?></h2>
    <table><tr><td><h3><?php echo h($theme['Theme']['stategic_theme']); ?><h3></td></tr>
	  <tr><td>
		<dd><?php echo __('Description'); ?>:
			<h4><?php echo h($theme['Theme']['description']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Result'); ?>:
		
			<h4><?php echo h($theme['Theme']['result']); ?></h4>
			&nbsp;
		</dd>
	</td></tr>

<tr><td class="actions">
	
	<?php echo $this->Html->link(__('Edit Theme'), array('action' => 'edit', $theme['Theme']['id'])); ?>
	<?php echo $this->Form->postLink(__('Delete Theme'), array('action' => 'delete', $theme['Theme']['id']), null, __('Are you sure you want to delete # %s?', $theme['Theme']['id'])); ?> 
	<?php echo $this->Html->link(__('List Themes'), array('action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Theme'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('download'), array( 'action' => 'downview', $theme['Theme']['id'])); ?> 
</td></tr>
</table>
<div class="related">
	<hr><h3><?php echo __('Related Objectives'); ?></h3><hr>
	<?php if (!empty($theme['Objective'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Objective Name'); ?></th>
		<th><?php echo __('Objective Weight'); ?></th>
		<th><?php echo __('Objective Description'); ?></th>
		
		<th><?php echo __('Outcome'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($theme['Objective'] as $objective): ?>
		<tr>
			<td><?php echo $objective['objective_name']; ?></td>
			<td><?php echo $objective['objective_weight']; ?></td>
			<td><?php echo $objective['objective_description']; ?></td>
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
