<h2>Add Subactivity</h2>
<?php echo $this->Form->create('Subactivity');?>
	
<table>
	<?php
		//echo $this->Form->input('name');
echo '<tr><td colspan = 2 >'.$this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8)).'</td></tr>';               
                echo '<tr><td colspan=2>'.$this->Form->input('majoractivity_id').'</td></tr>';
                echo '<tr><td colspan=2>'.$this->Form->input('period_id').'</td></tr>';
		echo '<tr><td colspan = 3 >'.$this->Form->input('subactivity_name',array('rows' => '3')).'</td></tr>';
	        echo '<tr><td>'.$this->Form->input('starting_date').'</td>
                      <td>'.$this->Form->input('ending_date').'</td></tr>'; 
		
	?>	


<tr><td class="Actions" colspan=2>
        <?php echo $this->Form->end('Submit');?>
	<?php echo $this->Html->link('List Subactivities',  array('action' => 'index'));?>
	<?php echo $this->Html->link('List Activitymonths',  array('controller' => 'activitymonths', 'action' => 'index')); ?> 
	<?php echo $this->Html->link('New Activitymonth',  array('controller' => 'activitymonths', 'action' => 'add')); ?> 
	<?php echo $this->Html->link('List Subactivityweaks',  array('controller' => 'subactivityweaks', 'action' => 'index')); ?> 
	<?php echo $this->Html->link('New Subactivityweak',  array('controller' => 'subactivityweaks', 'action' => 'add')); ?> 
</td></tr></table>	
