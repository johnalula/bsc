<div class="indicators view">
<h2><?php  echo __('Indicator'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($indicator['Indicator']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicator Name'); ?></dt>
		<dd>
			<?php echo h($indicator['Indicator']['indicator_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Area'); ?></dt>
		<dd>
			<?php echo h($indicator['Indicator']['area']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($indicator['Indicator']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($indicator['Indicator']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Indicator'), array('action' => 'edit', $indicator['Indicator']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Indicator'), array('action' => 'delete', $indicator['Indicator']['id']), null, __('Are you sure you want to delete # %s?', $indicator['Indicator']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Indicators'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Indicator'), array('action' => 'add')); ?> </li>
	</ul>
</div>
