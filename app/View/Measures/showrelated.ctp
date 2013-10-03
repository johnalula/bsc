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

</table>	
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
		foreach ($measure['Activity'] as $majoractivity): ?>
		<tr>
			
			<td><?php echo $majoractivity['activity']; ?></td>
			<td><?php echo $majoractivity['weight']; ?></td>
			<td><?php echo $majoractivity['ways_of_evaluation']; ?></td>
			<td><?php echo $majoractivity['precondition_from_office']; ?></td>
			
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'activities', 'action' => 'showrelated', $majoractivity['id'])); ?>
				
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
				<?php echo $this->Html->link(__('View'), array('controller' => 'targets', 'action' => 'showrelated', $target['id'])); ?>
				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
