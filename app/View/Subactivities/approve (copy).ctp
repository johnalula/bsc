<?php echo $this->Html->css('main');?>
<h2><?php echo __('Subactivities');?></h2>
<table cellpadding="0" cellspacing="0">
<!--<tr>	<th><?php echo $this->Paginator->sort('sub_activity');?></th>	
	<th><?php echo $this->Paginator->sort('weight');?></th>
        <th><?php echo $this->Paginator->sort('starting_date');?></th>
	<th><?php echo $this->Paginator->sort('ending_date');?></th>	
		
	<th class="actions"><?php echo __('Aproval');?></th>
</tr>-->
<?php
$i = 0;
$activity=-1;
foreach ($subactivities as $subactivity):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
      if($activity != $subactivity['Subactivity']['activity_id']){
         $activity = $subactivity['Subactivity']['activity_id'];
        echo '<tr class=success><td colspan = 5>'.$subactivity['Activity']['name'].'</td></tr>';
        echo '<tr><th>'.$this->Paginator->sort('sub_activity').'</th>';	
	echo '<th>'.$this->Paginator->sort('weight').'</th>';
        echo '<th>'.$this->Paginator->sort('starting_date').'</th>';
	echo '<th>'.$this->Paginator->sort('ending_date').'</th>';	
		
	echo '<th class="actions">'. __('Aproval').'</th>';
echo '</tr>';
}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $subactivity['Subactivity']['sub_activity']; ?>
		</td>
		<td>
			<?php echo $subactivity['Subactivity']['weight']; ?>
		</td>
               <td>
			<?php echo $subactivity['Subactivity']['starting_date']; ?>
		</td>
               <td>
			<?php echo $subactivity['Subactivity']['ending_date']; ?>
		</td>
               	<td class="actions">
                        <?php 
                         if ($subactivity['Subactivity']['is_approved']==0) {
			 echo "<span class='icon'><a href='".$this->Html->url('/subactivities/makeAproveDisAprove/'.$subactivity['Subactivity']['id'].'/1')."'><img src='"."/img/dis-approve.png' border='0' alt='Make Approve' title='Make Approve'></a></span>";
			} else {
			echo "<span class='icon'><a href='".$this->Html->url('/subactivities/makeAproveDisAprove/'.$subactivity['Subactivity']['id'].'/0')."'><img src='"."/img/approve.png' border='0' alt='Make DisAprove' title='Make DisAprove'></a></span>";
							}
                         ?>
			
		</td>
	</tr>
<?php endforeach; ?>
</table>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<!--<div class="actions">
<table>
	<tr>
		<td rowspan="2"><li><?php echo $this->Html->link('New Subactivity',  array('action' => 'add')); ?></li></td>
		<td><li><?php echo $this->Html->link('List Activitymonths',  array('controller' => 'activitymonths', 'action' => 'index')); ?> </li></td>
    <td><li><?php echo $this->Html->link('List Subactivityweaks',  array('controller' => 'subactivityweaks', 'action' => 'index')); ?> </li>
 </td>
	<td><li><?php echo $this->Html->link('New Activitymonth',  array('controller' => 'activitymonths', 'action' => 'add')); ?> </li></td>
		
		<td><li><?php echo $this->Html->link('New Subactivityweak',  array('controller' => 'subactivityweaks', 'action' => 'add')); ?> </li></td></tr>
	</ul>
</table>
</div>-->
</div>


