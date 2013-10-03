<h2><?php echo __('Target Actual'); ?></h2>
<?php echo $this->Form->create('Target'); ?>
		<?php echo $this->Form->input('id'); ?>
	<table> <tr><td> <?php echo $this->Form->input('actual_value'); ?> </td></tr>
<tr><td> <?php echo $this->Form->end(__('Submit')); ?> </td></tr></table>
