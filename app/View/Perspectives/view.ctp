<h2><?php  echo __('Perspective'); ?></h2>
          <table><tr><td>
		<h3><?php echo  $this->Html->link(__($perspective['Perspective']['perspective_name']), array('action' => 'index')); ?></h3>
		</td></tr>
         <tr><td>
           <dd><?php echo __('Perspective Weight'); ?>:
		
			<d><?php echo h($perspective['Perspective']['perspective_weight']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Perspective Description'); ?>:
			<h4><?php echo h($perspective['Perspective']['perspective_description']); ?></h4>
			&nbsp;
		</dd>
</td></tr>
<tr><td class="actions">
<?php echo $this->Html->link(__('Edit Perspective'), array('action' => 'edit', $perspective['Perspective']['id'])); ?>
<?php echo $this->Form->postLink(__('Delete Perspective'), array('action' => 'delete', $perspective['Perspective']['id']), null, __('Are you sure you want to delete # %s?', $perspective['Perspective']['id'])); ?>
<?php echo $this->Html->link(__('List Perspectives'), array('action' => 'index')); ?>
<?php echo $this->Html->link(__('New Perspective'), array('action' => 'add')); ?>
<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?>
<?php echo $this->Html->link(__('download'), array('action' => 'downview', $perspective['Perspective']['id'])); ?> 
</td></tr>

</table>
<div class="related">
	<h3><?php echo __('Related Objectives'); ?></h3>
 <hr>
	<?php if (!empty($perspective['Objective'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Objective Name'); ?></th>
		<th><?php echo __('Objective Weight'); ?></th>
		<th><?php echo __('Objective Description'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($perspective['Objective'] as $objective): ?>
		<tr>
	
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
	
<?php endif; ?>

	<tr><td colspan='4' class="actions">
		<?php echo $this->Html->link(__('Edit Perspective'), array('action' => 'edit', $perspective['Perspective']['id'])); ?>
		<?php echo $this->Form->postLink(__('Delete Perspective'), array('action' => 'delete', $perspective['Perspective']['id']), null, __('Are you sure you want to delete # %s?', $perspective['Perspective']['id'])); ?> 
		<?php echo $this->Html->link(__('List Perspectives'), array('action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Perspective'), array('action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?>
</td></tr></table>
