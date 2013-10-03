<div class="targets view">
<h2><?php  echo __('Target'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($target['Target']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($target['Target']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($target['Target']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Target Year'); ?></dt>
		<dd>
			<?php echo h($target['Target']['target_year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Target Baseline'); ?></dt>
		<dd>
			<?php echo h($target['Target']['target_baseline']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Target Value'); ?></dt>
		<dd>
			<?php echo h($target['Target']['target_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Measure'); ?></dt>
		<dd>
			<?php echo $this->Html->link($target['Measure']['id'], array('controller' => 'measures', 'action' => 'view', $target['Measure']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Target'), array('action' => 'edit', $target['Target']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Target'), array('action' => 'delete', $target['Target']['id']), null, __('Are you sure you want to delete # %s?', $target['Target']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Targets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Target'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> </li>
	</ul>
</div>
