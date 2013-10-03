<h2><?php echo __('Student Activityevaluationvalue'); ?></h2>
<table cellspacing="0" cellpadding="0" width="100%" border="0" >
	<tr><th>Activity</th>
	<th>Is Four (4)</th>
	<th>Is Three (3)</th>
	<th>Is Two (2)</th>
	<th>Is One (1)</th></tr>
  <?php foreach($activityevaluationvalues as $value):?>
	<tr>
		<td><?php echo $value['Activity']['activity'];?></td>
		<td>
		<?php if($value['Activityevaluationvalue']['student']==4){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addstudent/'.
					$value['Activityevaluationvalue']['id'].'/4')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		 </td>
		<td>
		<?php if($value['Activityevaluationvalue']['student']==3){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addstudent/'.
					$value['Activityevaluationvalue']['id'].'/3')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Activityevaluationvalue']['student']==2){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addstudent/'.
					$value['Activityevaluationvalue']['id'].'/2')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Activityevaluationvalue']['student']==1){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addstudent/'.
					$value['Activityevaluationvalue']['id'].'/1')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
	</tr>
  <?php endforeach;?>

