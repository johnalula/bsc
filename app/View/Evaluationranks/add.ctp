<h2><?php echo __('Add Evaluationrank'); ?></h2>
<?php echo $this->Form->create('Evaluationrank'); ?>
	<?php   echo $this->Form->input('rank',array('type'=>'select','options'=>array(1=>1,2=>2,3=>3,4=>4)));
		echo $this->Form->input('value');
		echo $this->Form->input('description',array('rows'=>'2'));
	?>
	
<?php echo $this->Form->end(__('Submit')); ?>

<p class="actions">
	<?php echo $this->Html->link(__('List Evaluationranks'), array('action' => 'index')); ?>
</p>
