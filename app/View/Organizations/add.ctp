<div class="organizations form">
<?php echo $this->Form->create('Organization'); ?>
	<fieldset>
		<legend><?php echo __('Add Organization'); ?></legend>
    <table>
	<?php
		echo '<tr><td colspan=2>'.$this->Form->input('organization_name').'</td></tr>';
		echo '<tr><td>'.$this->Form->input('mission').'</td>'.'<td>'.$this->Form->input('vision').'</td></tr>'; 
		echo '<tr><td>'.$this->Form->input('value').'</td>'.'<td>'.$this->Form->lablelTag('logo','Logo').$this->Html->file('logo').'</td></tr>';  
                echo '<tr><td colspan=2>'.$this->Form->input('motto').'</td></tr>';      
		
	?>
	</fieldset>
<?php echo '<tr><td>'.$this->Form->end(__('Submit')).'</td></tr>'; ?>
</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Organizations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> </li>
	</ul>
</div>
