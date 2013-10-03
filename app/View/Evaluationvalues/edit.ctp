<div class="evaluationvalues form">
<?php echo $this->Form->create('Evaluationvalue'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evaluationvalue'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('is_acadamic');
		echo $this->Form->input('type');
		echo $this->Form->input('value');
		echo $this->Form->input('remark');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evaluationvalue.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Evaluationvalue.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluationvalues'), array('action' => 'index')); ?></li>
	</ul>
</div>
