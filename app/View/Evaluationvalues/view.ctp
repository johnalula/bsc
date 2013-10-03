<div class="evaluationvalues view">
<h2><?php  echo __('Evaluationvalue'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluationvalue['Evaluationvalue']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Acadamic'); ?></dt>
		<dd>
			<?php echo h($evaluationvalue['Evaluationvalue']['is_acadamic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Type'); ?></dt>
		<dd>
			<?php echo h($evaluationvalue['Evaluationvalue']['type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($evaluationvalue['Evaluationvalue']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remark'); ?></dt>
		<dd>
			<?php echo h($evaluationvalue['Evaluationvalue']['remark']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluationvalue'), array('action' => 'edit', $evaluationvalue['Evaluationvalue']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluationvalue'), array('action' => 'delete', $evaluationvalue['Evaluationvalue']['id']), null, __('Are you sure you want to delete # %s?', $evaluationvalue['Evaluationvalue']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluationvalues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluationvalue'), array('action' => 'add')); ?> </li>
	</ul>
</div>
