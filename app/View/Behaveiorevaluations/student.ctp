<h2><?php echo __('Student Behaveiorevaluation'); ?></h2>
<table cellspacing="0" cellpadding="0" width="100%" border="0" >
	<th>Name</th>
	<th>Is Four (4)</th>
	<th>Is Three (3)</th>
	<th>Is Two (2)</th>
	<th>Is One (1)</th></tr>
  <?php foreach($behaveiorevaluation as $value):?>
	<tr><td>
		<?php echo $value['User']['first_name']." ".$value['User']['last_name']; ?>		
		</td>
		
		<td>
		<?php if($value['Behaveiorevaluation']['student']==4){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addstudent/'.
					$value['Behaveiorevaluation']['id'].'/4')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		 </td>
		<td>
		<?php if($value['Behaveiorevaluation']['student']==3){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addstudent/'.
					$value['Behaveiorevaluation']['id'].'/3')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Behaveiorevaluation']['student']==2){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addstudent/'.
					$value['Behaveiorevaluation']['id'].'/2')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Behaveiorevaluation']['student']==1){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addstudent/'.
					$value['Behaveiorevaluation']['id'].'/1')."'>".$this->Html->image('okn.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
	</tr>
  <?php endforeach;?>

