<h2><?php echo __('Personal Report'); ?></h2>
<?php echo $this->Form->create('Report'); ?>
 <table cellpadding="0" cellspacing="0">
	<tr><td> <?php echo $this->Form->input('office_id',array('empty' => 'select an office')); ?> </td><td><?php echo $this->Form->input('user_id',array('empty' => 'select staf`')); ?> </td>
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
	    <th>Weight</th>
	    <th>value</th>
            <th>Self</th>
            <th>Pear</th>
            <th>Head</th>
	    <th>Total(100%)</th>
         </tr>   
    <?php  if($rows){
              $fTotal=array();
		$i=0;     
              foreach ($rows as $row): ?>
             <tr><td><?php echo $row['p']['perspective_name'] ?></td>
                <td><?php echo $row['o']['objective_name'] ?></td>
		<td><?php echo $row['m']['measure_name'] ?></td>
                <td><?php echo $row['f']['frequency_name'] ?></td>
                <td><?php echo $row['pr']['period_name'] ?></td>
		<td><?php echo $row['ac']['activity'] ?></td>
		<td><?php echo $row['ac']['weight'] ?></td>
		
                <?php $sf = $row['ace']['self']; 
                      $pr = $row['ace']['pear'];
		      $hd = $row['ace']['head']; 
			$self=($sf/4)*25;
			$pear=($pr/4)*37.5;
			$head=($hd/4)*37.5;?>
		<td><?php echo ($row['ac']['weight']/4)*(($sf+$pr+$hd)/3);?></td>
		<td><?php echo $self;?></td>
		<td><?php echo $pear;?></td>
		<td><?php echo $head; $total=$self+$pear+$head;?></td>
               <?php if($total >= 80) {echo "<td bgcolor = Green>".$total."</td>";}
			else if($total >= 60 & $total < 80){echo "<td bgcolor = yellow>".$total."</td>";}
			else {echo "<td bgcolor = red>".$total."</td>";} ?>
                <?php $fTotal[$i]=$total;
			$i++;?>
             </tr>
    <?php endforeach; ?>
	<tr>    
		<td colspan ='10'></td><td>AVG</td>
		<?php $sum=0;
			for($j=0;$j<$i;$j++){
				$sum=$sum+$fTotal[$j];
				}
			$ts= ($sum/$i);	
		if($ts >= 80) {echo "<td bgcolor=Green>".$ts."</td>";}
			else if($ts >= 60){echo "<td bgcolor = yellow>".$ts."</td>";}
			else {echo "<td>".$ts."</td bgcolor=Red>";}
			?>
	
	</tr>
</table>
<h4>Behavior evaluationn</h4><hr>
<table cellpadding="0" cellspacing="0">
	<tr><th>User Name</th>
	    <th>Period</th>
	    <th>Self</th>
            <th>Pear</th>
            <th>Head</th>
            <th>Total</th>
	</tr>  
	<?php  
                   
              foreach ($behaves as $behavior): ?>
             <tr><td><?php echo $user_name= $behavior['u']['first_name']." ".$behavior['u']['last_name']; ?></td>
		<td><?php echo $period = $behavior['p']['period_name'] ?></td>
                <td><?php echo $bself =($behavior['b']['self']/4)*25; ?></td>
		<td><?php echo $bpear= ($behavior['b']['pear']/4)*37.5; ?></td>
                <td><?php echo $bhead= ($behavior['b']['head']/4)*37.5; ?></td>
                <?php  $btotal = ($bself+$bpear+$bhead); 
			if($btotal >= 80) {echo "<td bgcolor=Green>".$btotal."</td>";}
			else if($btotal >= 60){echo "<td bgcolor = yellow>".$btotal."</td>";}
			else {echo "<td>".$btotal."</td bgcolor=Red>";}
			?>
            <tr>
           <?php endforeach; ?>
	</table>
	
    <h4>Personal evaluationn</h4><hr>
	<table cellpadding="0" cellspacing="0">
		<tr><th>User Name</th>
		<th>Period</th>
		<th>Activity(100%)</th>
		<th>Activity(60%)</th>
		<th>Behavior(100%)</th>
		<th>Behavior(40%)</th>
		<th>AVG Evaluation</th>
		<th>Performance</th></tr>
		<tr><td><?php echo $user_name;?></td>
		    <td><?php echo $period;?></td>
		    <?php if($ts >= 80) {echo "<td bgcolor=Green>".$ts."</td>";}
			else if($ts >= 60){echo "<td bgcolor = yellow>".$ts."</td>";}
			else {echo "<td>".$ts."</td bgcolor=Red>";}
			?>
		    <td><?php echo $av=($sum/$i)*0.6;?></td>
		    <?php if($btotal >= 80) {echo "<td bgcolor=Green>".$btotal."</td>";}
			else if($btotal >= 60){echo "<td bgcolor = yellow>".$btotal."</td>";}
			else {echo "<td>".$btotal."</td bgcolor=Red>";}
			?>	
		    <td><?php echo $bv=$btotal*0.4;?></td>
		     <?php    $tv=$av+$bv; $treq =""; 	if($tv >= 95) {echo "<td bgcolor=Green>".$tv."</td>";$treq="Exellent";}
			   				else if($tv >= 80){echo "<td bgcolor = yellow>".$tv."</td>"; $treq="Very Good";}
							else if($tv >= 60){echo "<td bgcolor = #FFFFCC>".$tv."</td>"; $treq="Good";}
							else if($tv >= 50){echo "<td bgcolor = #FF0099>".$tv."</td>"; $treq="Less";}
							else {echo "<td>".$tv."</td bgcolor=Red>"; $treq="Very Less";}
			?>
		    <td color=#ddd;><?php echo $treq;?></td>			
<tr><td class="actions" colspan = '7'>
	<?php echo $this->Html->link(__('List majoractivity'), array('controller' => 'majoractivities', 'action' => 'index')); ?>
	<?php echo $this->Html->link(__('List Measures'), array('controller' => 'measures', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Measure'), array('controller' => 'measures', 'action' => 'add')); ?> 

     
	<?php echo $this->Html->link(__('download'), array('controller' => 'reports', 'action' => 'download',$rows[0]['ace']['office_id'],$rows[0]['ace']['year'],$rows[0]['ace']['period_id']));}?> 
         
	</td></tr> 
</table> 

<?php
$this->Js->get('#ReportOfficeId')->event('change', 
	$this->Js->request(array(
		'controller'=>'users',
		'action'=>'getByOfficer'
		), array(
		'update'=>'#ReportUserId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>
