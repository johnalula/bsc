<div class="evaluationranks form">
<?php echo $this->Form->create('Evaluationrank'); ?>
	<fieldset>
		<legend><?php echo __('Edit Evaluationrank'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('value');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Evaluationrank.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Evaluationrank.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Evaluationranks'), array('action' => 'index')); ?></li>
	</ul>
</div>
