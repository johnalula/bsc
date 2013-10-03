<h2><?php  echo __('Objective'); ?></h2>
	<table><tr><td>	<h3><?php echo $this->Html->link(__($objective['Objective']['objective_name']), array('action' => 'index')); ?></h3>
 </td></tr>
		<tr><td>
			
		<dd><?php echo __('Objective Weight'); ?>
		
			:<h4><?php echo h($objective['Objective']['objective_weight']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Objective Description'); ?>:
		
			<h4><?php echo h($objective['Objective']['objective_description']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Perspective'); ?>
		
			:<h4><?php echo $this->Html->link($objective['Perspective']['perspective_name'], array('controller' => 'perspectives', 'action' => 'view', $objective['Perspective']['id'])); ?></h4>
			&nbsp;
		</dd>
		
	</td></tr>	
<tr><td class="actions">
	
		<?php echo $this->Html->link(__('Edit Objective'), array('action' => 'edit', $objective['Objective']['id'])); ?> 
		<?php echo $this->Form->postLink(__('Delete Objective'), array('action' => 'delete', $objective['Objective']['id']), null, __('Are you sure you want to delete # %s?', $objective['Objective']['id'])); ?> 
		<?php echo $this->Html->link(__('List Objectives'), array('action' => 'index')); ?> 
		
		<?php echo $this->Html->link(__('List Perspectives'), array('controller' => 'perspectives', 'action' => 'index')); ?> 				
		<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Initiatives'), array('controller' => 'initiatives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Initiative'), array('controller' => 'initiatives', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('download'), array('action' => 'downview', $objective['Objective']['id'])); ?> 		
		
		
</td></tr>	
</table>
<div class="related">
   <hr>
	<h3><?php echo __('Related Measures'); ?></h3>
 <hr>
	<?php if (!empty($objective['Measure'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		
		<th><?php echo __('Measure Name'); ?></th>
		
		<th><?php echo __('Measure Type'); ?></th>
		
		<th><?php echo __('Polarity'); ?></th>
		<th><?php echo __('Measure Weight'); ?></th>
		
		<th><?php echo __('Formula'); ?></th>
		<th><?php echo __('Data Source'); ?></th>
		<th><?php echo __('Data Quality'); ?></th>
		<th><?php echo __('Data Collector'); ?></th>
		<th><?php echo __('Rationalie'); ?></th>
		<th><?php echo __('Baseline'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($objective['Measure'] as $measure): ?>
		<tr>
			
			<td><?php echo $measure['measure_name']; ?></td>
			
			<td><?php echo $measure['measure_type']; ?></td>
			
			<td><?php echo $measure['polarity']; ?></td>
			<td><?php echo $measure['measure_weight']; ?></td>
			
			<td><?php echo $measure['formula']; ?></td>
			<td><?php echo $measure['data_source']; ?></td>
			<td><?php echo $measure['data_quality']; ?></td>
			<td><?php echo $measure['data_collector']; ?></td>
			<td><?php echo $measure['rationalie']; ?></td>
			<td><?php echo $measure['baseline']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'measures', 'action' => 'view', $measure['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'measures', 'action' => 'edit', $measure['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'measures', 'action' => 'delete', $measure['id']), null, __('Are you sure you want to delete # %s?', $measure['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>

	<tr><td class="actions">
		<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
</td></tr>
</table>
<div class="related">
   <hr>
	<h3><?php echo __('Related Initiatives'); ?></h3>
<hr>
	<?php if (!empty($objective['Initiative'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Initiative Name'); ?></th>
		<th><?php echo __('Initiative Description'); ?></th>
		<th><?php echo __('Initiative Importance'); ?></th>
		<th><?php echo __('Deliverable'); ?></th>
		<th><?php echo __('Budget'); ?></th>
		<th><?php echo __('Start Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($objective['Initiative'] as $initiative): ?>
		<tr>
			
			<td><?php echo $initiative['initiative_name']; ?></td>
			<td><?php echo $initiative['initiative_description']; ?></td>
			<td><?php echo $initiative['initiative_importance']; ?></td>
			<td><?php echo $initiative['deliverable']; ?></td>
			<td><?php echo $initiative['budget']; ?></td>
			<td><?php echo $initiative['start_date']; ?></td>
			<td><?php echo $initiative['end_date']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'initiatives', 'action' => 'view', $initiative['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'initiatives', 'action' => 'edit', $initiative['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'initiatives', 'action' => 'delete', $initiative['id']), null, __('Are you sure you want to delete # %s?', $initiative['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>
<tr><td class="actions">
		<?php echo $this->Html->link(__('New Initiative'), array('controller' => 'initiatives', 'action' => 'add')); ?> 
</td></tr></table>
<div class="related">
   <hr>
	<h3><?php echo __('Related Themes'); ?></h3>
<hr>
	<?php if (!empty($objective['Theme'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Strategic Theme'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Result'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($objective['Theme'] as $theme): ?>
		<tr>
			
			<td><?php echo $theme['stategic_theme']; ?></td>
			<td><?php echo $theme['description']; ?></td>
			<td><?php echo $theme['result']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'themes', 'action' => 'view', $theme['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'themes', 'action' => 'edit', $theme['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'themes', 'action' => 'delete', $theme['id']), null, __('Are you sure you want to delete # %s?', $theme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>
	<tr><td class="actions">
		<?php echo $this->Html->link(__('New Theme'), array('controller' => 'themes', 'action' => 'add')); ?> 
</td></tr></table>
<div class="related">
	<hr><h3><?php echo __('Related Offices'); ?></h3><hr>
	<?php if (!empty($objective['Office'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Office Name'); ?></th>
		<th><?php echo __('Organization Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($objective['Office'] as $office): ?>
		<tr>
			<td><?php echo $office['id']; ?></td>
			<td><?php echo $office['created']; ?></td>
			<td><?php echo $office['modified']; ?></td>
			<td><?php echo $office['office_name']; ?></td>
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
