<h2><?php echo __('Personal Report'); ?></h2>
<?php echo $this->Form->create('Report'); ?>
 <table cellpadding="0" cellspacing="0">
	<tr><td> <?php echo $this->Form->input('office_id'); ?> </td><td><?php echo $this->Form->input('user_id'); ?> </td>
            <td> <?php echo $this->Form->input('year',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?> </td>
            
            <!--<td> <?php echo $this->Form->input('frequency_id'); ?> </td>-->
            <td colspan = '5'> <?php echo $this->Form->input('period_id'); ?> </td>  </tr>
	<tr><td colspan = '9'> <?php echo $this->Form->end(__('Generate Report')); ?> </td></tr> 
	</table>
	<h4>Activity evaluationn</h4><hr>   
 <table cellpadding="0" cellspacing="0">
	 <tr> 
	    <th>Perspective</th>
            <th>Objective</th>
            <th>Measure</th>
            <th>Frequency</th>
	    <th>Period</th>
	    <th>Activity</th>
            <th>BaseLine</th>
            <th>Target</th>
            <th>Actual</th>
         </tr>   
    <?php  if($rows)
                   
              foreach ($rows as $row): ?>
             <tr><td><?php echo $row['p']['perspective_name'] ?></td>
                <td><?php echo $row['o']['objective_name'] ?></td>
		<td><?php echo $row['m']['measure_name'] ?></td>
                <td><?php echo $row['f']['frequency_name'] ?></td>
                <td><?php echo $row['pr']['period_name'] ?></td>
		 <td><?php echo $row['ac']['activity_name'] ?></td>
                <td><?php echo $row['ac']['baseline'] ?></td>
                <td><?php echo $row['ac']['target'] ?></td>
                
                <?php  $p=$row['ac']['acomplishment'];
                   if($p<50) echo'<td bgcolor=RED>'.$p.'</td>';
                   else if($p>=50 & $p<=70) echo '<td bgcolor=YELLOW>'.$p.'</td>'; 
                   else if($p>70) echo '<td bgcolor=GREEN>'.$p.'</td>';  
                ?>
             </tr></table>
    <?php endforeach; ?>
<!--<h4>Behavior evaluationn</h4><hr>
<table cellpadding="0" cellspacing="0">
	<tr><th>Period</th>
	    <th>Evaluation Criteria</th>
            <th>Evaluation Type</th>
            <th>Evaluation Rank</th>
            <th colspan ='5'>Remark</th>
	</tr>  
	<?php  if($rows)
                   
              foreach ($behaves as $behavior): ?>
             <tr><td><?php echo $behavior['p']['period_name'] ?></td>
                <td><?php echo $behavior['bc']['criteria_name'] ?></td>
		<td><?php echo $behavior['et']['evaluation_name'] ?></td>
                <td><?php echo $behavior['rk']['rank_value'] ?></td>
                <td colspan ='5'><?php echo $behavior['be']['remark'] ?></td> 
            <tr>
           <?php endforeach; ?>
<tr><td class="actions" colspan = '7'>
	<?php echo $this->Html->link(__('List majoractivity'), array('controller' => 'majoractivities', 'action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 
-->
      <?php  if($rows)
	 echo $this->Html->link(__('download'), array('controller' => 'reports', 'action' => 'download',$rows[0]['ac']['office_id'],$rows[0]['ac']['year'],$rows[0]['ac']['period_id']));?> 
          
	</td></tr> 
</table> 
