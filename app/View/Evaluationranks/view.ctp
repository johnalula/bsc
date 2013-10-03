<div class="evaluationranks view">
<h2><?php  echo __('Evaluationrank'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($evaluationrank['Evaluationrank']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($evaluationrank['Evaluationrank']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($evaluationrank['Evaluationrank']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Evaluationrank'), array('action' => 'edit', $evaluationrank['Evaluationrank']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Evaluationrank'), array('action' => 'delete', $evaluationrank['Evaluationrank']['id']), null, __('Are you sure you want to delete # %s?', $evaluationrank['Evaluationrank']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Evaluationranks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Evaluationrank'), array('action' => 'add')); ?> </li>
	</ul>
</div>
