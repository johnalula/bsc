<?php echo $this->Html->css('main');?>
<h1>Remark Activity</h1>
<h1><?php __('Remark Activity');?> </h1>

<?php echo $this->Form->create('Activity');?>
	<fieldset>
 		<legend><?php __('Edit Subactivity');?></legend>
<table>
	<?php
		echo $this->Form->input('id');
                echo '<tr><td>'.$this->Form->input('remark',array('rows' => '3')).'</td></tr>';
       ?>
</fieldset>
<div class="actions">
<tr><td><?php echo $this->Form->end('Submit');?></td><td><li><?php echo $this->Html->link('List Activity',  array('action' => 'index'));?></li></td>
</table>
</div>
