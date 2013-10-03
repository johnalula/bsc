<h2><?php echo __('Report`s Of '.$officename.' office'); ?></h2>
<?php echo $this->Form->create('Report'); ?>
<table cellpadding="0" cellspacing="0"> 
	<tr>
            <td> <?php echo $this->Form->input('year_id',array('type'=>'select','options'=>$year,'selected'=>date('Y')-8));?> </td>
            
            <!--<td> <?php echo $this->Form->input('frequency_id'); ?> </td>-->
            <td colspan = '5'> <?php echo $this->Form->input('period_id'); ?> </td>  </tr>
	<tr><td colspan = '9'> <?php echo $this->Form->end(__('Generate Report')); ?> </td></tr> 
	
	 <tr>
	    <th>Perspective</th>
            <th>Objective</th>
            <th>Measure</th>
            <th>Unit</th>
            <th>Frequency</th>
	    <th>Period</th>
            <th>BaseLine</th>
            <th>Target</th>
            <th>Actual</th>
	    <th>light</th>
            <th>Performance</th></tr>
    <?php  if($rows)
                   
              foreach ($rows as $row): ?>
             <tr><td><?php echo $row['p']['perspective_name'] ?></td>
                <td><?php echo $row['o']['objective_name'] ?></td>
		<td><?php echo $row['m']['measure_name'] ?></td>
                <td><?php echo $row['u']['name'] ?></td>
                <td><?php echo $row['f']['frequency_name'] ?></td>
                <td><?php echo $row['pr']['period_name'] ?></td>
                <td><?php echo $baseline=$row['t']['baseline'] ?></td>
                <td><?php echo $target=$row['t']['target'] ?></td>
                <td><?php echo $value=$row['t']['actual_value'] ?></td>
                <?php  $p=(($value-$baseline)*100)/($target-$baseline);
		  foreach($thresholds as $threshold):
			if($p >= $threshold['t']['lower'] && $p <= $threshold['t']['upper']){
				echo '<td>'.$this->Html->image('thresholds/'.$threshold['t']['background'], array('alt'=>'not imge','width'=>'20', 'height'=>'20')).'</td>'; 
			$performance = $threshold['t']['performance'];
				break;
			}
			endforeach;
                   if($p<50) echo'<td bgcolor=RED>'.'('.$performance.')'.$p.'</td>';
                   else if($p>=50 & $p<=70) echo '<td bgcolor=YELLOW>'.'('.$performance.')'.$p.'</td>'; 
                   else if($p>70) echo '<td bgcolor=GREEN>'.'('.$performance.')'.$p.'</td>';  
                ?>
             </tr>   
    <?php endforeach; ?>
<tr><td class="actions" colspan = '7'>
	<?php echo $this->Html->link(__('By Measure'), array('action' => 'measurof')); ?>
	<?php echo $this->Html->link(__('By Objective'), array('action' => 'objectiveof')); ?> 
	<?php echo $this->Html->link(__('By Perspective'), array('action' => 'perspectiveof')); ?> 
   	<?php echo $this->Html->link(__('By Themes'), array('action' => 'themeof')); ?> 

      <?php  if($rows)
	 echo $this->Html->link(__('download'), array('controller' => 'reports', 'action' => 'download',$rows[0]['t']['office_id'],$row['t']['year'],$row['t']['period_id']));?> 
          
	</td></tr> 
</table> 
