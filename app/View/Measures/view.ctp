<h2><?php  echo __('Measure'); ?></h2>
     <table><tr><td>
	<h3><?php echo $this->Html->link(__($measure['Measure']['measure_name']), array('action' => 'index')); ?></h3>
			
			</td></tr>
<tr><td>      <dd><?php echo __('Objective'); ?>:
               <d><?php echo $this->Html->link($measure['Objective']['objective_name'], array('controller' => 'objectives', 'action' => 'view', $measure['Objective']['id'])); ?></d>
              </dd>
		<dd><?php echo __('Description'); ?>:
		
			<d><?php echo h($measure['Measure']['description']); ?></d>
			&nbsp;
		</dd>
		
		<dd><?php echo __('Measure Type'); ?>:
		
			<d><?php echo h($measure['Measure']['measure_type']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Unit'); ?>:
		
			<d><?php echo $this->Html->link($measure['Unit']['name'], array('controller' => 'units', 'action' => 'view', $measure['Unit']['id'])); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Polarity'); ?>:
		
			<d><?php echo h($measure['Measure']['polarity']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Measure Weight'); ?>:
		
			<d><?php echo h($measure['Measure']['measure_weight']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Frequency'); ?>:
		
			<d><?php echo $this->Html->link($measure['Frequency']['frequency_name'], array('controller' => 'frequencies', 'action' => 'view', $measure['Frequency']['id'])); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Formula'); ?>:
		
			<d><?php echo h($measure['Measure']['formula']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Data Source'); ?>:
		
			<d><?php echo h($measure['Measure']['data_source']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Data Quality'); ?>:
		
			<d><?php echo h($measure['Measure']['data_quality']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Data Collector'); ?>:
		
			<d><?php echo h($measure['Measure']['data_collector']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Rationalie'); ?>:
		
			<d><?php echo h($measure['Measure']['rationalie']); ?></h4>
			&nbsp;
		</dd>
		<dd><?php echo __('Baseline'); ?>:
		
			<d><?php echo h($measure['Measure']['baseline']); ?></d>
			&nbsp;
		</dd>
		<dd><?php echo __('Threshold'); ?>:
		
			<d><?php echo $this->Html->link($measure['Threshold']['id'], array('controller' => 'thresholds', 'action' => 'view', $measure['Threshold']['id'])); ?></d>
			&nbsp;
		</td></tr>
<tr><td class="actions">
	<?php echo $this->Html->link(__('Edit Measure'), array('action' => 'edit', $measure['Measure']['id'])); ?> 
	<?php echo $this->Form->postLink(__('Delete Measure'), array('action' => 'delete', $measure['Measure']['id']), null, __('Are you sure you want to delete # %s?', $measure['Measure']['id'])); ?> 
	<?php echo $this->Html->link(__('List Measures'), array('action' => 'index')); ?> 
	
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?>
	
	<?php echo $this->Html->link(__('List Units'), array('controller' => 'units', 'action' => 'index')); ?> 
	
	<?php echo $this->Html->link(__('List Frequencies'), array('controller' => 'frequencies', 'action' => 'index')); ?> 
	
	
	
	<?php echo $this->Html->link(__('List Majoractivities'), array('controller' => 'majoractivities', 'action' => 'index')); ?> 
	
	<?php echo $this->Html->link(__('List Targets'), array('controller' => 'targets', 'action' => 'index')); ?> 
	
</td></tr></table>	
<div class="related">
	<hr><h3><?php echo __('Related Majoractivities'); ?></h3><hr>
	<?php if (!empty($measure['Majoractivity'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Activity Name'); ?></th>
		<th><?php echo __('Activity Weight'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($measure['Majoractivity'] as $majoractivity): ?>
		<tr>
			
			<td><?php echo $majoractivity['created']; ?></td>
			<td><?php echo $majoractivity['modified']; ?></td>
			<td><?php echo $majoractivity['activity_name']; ?></td>
			<td><?php echo $majoractivity['activity_weight']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'majoractivities', 'action' => 'view', $majoractivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'majoractivities', 'action' => 'edit', $majoractivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'majoractivities', 'action' => 'delete', $majoractivity['id']), null, __('Are you sure you want to delete # %s?', $majoractivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	
<?php endif; ?>

	<tr><td class="actions" colspan=6>
		<?php echo $this->Html->link(__('New Majoractivity'), array('controller' => 'majoractivities', 'action' => 'add')); ?> 
</td></tr></table>
<div class="related">

	<hr><h3><?php echo __('Related Targets'); ?></h3><hr>
	<?php if (!empty($measure['Target'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		
		
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Baseline'); ?></th>
		<th><?php echo __('Target'); ?></th>
		<th><?php echo __('Actual Value'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($measure['Target'] as $target): ?>
		<tr>
			
			
			<td><?php echo $target['year']; ?></td>
			<td><?php echo $target['baseline']; ?></td>
			<td><?php echo $target['target']; ?></td>
                        <td><?php echo $target['actual_value']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'targets', 'action' => 'view', $target['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'targets', 'action' => 'edit', $target['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'targets', 'action' => 'delete', $target['id']), null, __('Are you sure you want to delete # %s?', $target['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Target'), array('controller' => 'targets', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
