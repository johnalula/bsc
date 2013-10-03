<h2><?php echo __('Peer Activityevaluationvalue'); ?></h2>
<table cellspacing="0" cellpadding="0" width="100%" border="0" >
	<tr><th rowspan=2>Staf Name</th>
	<th rowspan=2>Activity</th>
	<th colspan=4 bgcolor=#333>In Qulity</th>
	<th colspan=4>In Time</th>
	<th colspan=4>In Quantity</th>
	</tr>
	<tr>
	<th>Is Four (4)</th>
	<th>Is Three (3)</th>
	<th>Is Two (2)</th>
	<th>Is One (1)</th>
	<th>Is Four (4)</th>
	<th>Is Three (3)</th>
	<th>Is Two (2)</th>
	<th>Is One (1)</th>
	<th>Is Four (4)</th>
	<th>Is Three (3)</th>
	<th>Is Two (2)</th>
	<th>Is One (1)</th>
	</tr>
  <?php foreach($activityevaluationvalues as $value):?>
	<?php if($value['Activityevaluationvalue']['pear']<1){?>
	<tr>	
		<td><?php echo $value['User']['first_name']." ".$value['User']['last_name']; ?></td>
		<td><?php echo $value['Activity']['activity'];?></td>
		
		<td bgcolor=#777>
		<?php if($value['Activityevaluationvalue']['pIn_quality']==4){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquality/'.
					$value['Activityevaluationvalue']['id'].'/4')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		 </td>
		<td bgcolor=#777>
		<?php if($value['Activityevaluationvalue']['pIn_quality']==3){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquality/'.
					$value['Activityevaluationvalue']['id'].'/3')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#777>
		<?php if($value['Activityevaluationvalue']['pIn_quality']==2){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquality/'.
					$value['Activityevaluationvalue']['id'].'/2')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#777>
		<?php if($value['Activityevaluationvalue']['pIn_quality']==1){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquality/'.
					$value['Activityevaluationvalue']['id'].'/1')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#AAA>
		<?php if($value['Activityevaluationvalue']['pIn_time']==4){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearIntime/'.
					$value['Activityevaluationvalue']['id'].'/4')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#AAA>
		<?php if($value['Activityevaluationvalue']['pIn_time']==3){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearIntime/'.
					$value['Activityevaluationvalue']['id'].'/3')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#AAA>
		<?php if($value['Activityevaluationvalue']['pIn_time']==2){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearIntime/'.
					$value['Activityevaluationvalue']['id'].'/2')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#AAA>
		<?php if($value['Activityevaluationvalue']['pIn_time']==1){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearIntime/'.
					$value['Activityevaluationvalue']['id'].'/1')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		
		
		<td bgcolor=#EEE>
		<?php if($value['Activityevaluationvalue']['pIn_quantity']==4){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					  echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquntity/'.
					$value['Activityevaluationvalue']['id'].'/4')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#EEE>
		<?php if($value['Activityevaluationvalue']['pIn_quantity']==3){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					 echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquntity/'.
					$value['Activityevaluationvalue']['id'].'/3')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#EEE>
		<?php if($value['Activityevaluationvalue']['pIn_quantity']==2){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					 echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquntity/'.
					$value['Activityevaluationvalue']['id'].'/2')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td bgcolor=#EEE>
		<?php if($value['Activityevaluationvalue']['pIn_quantity']==1){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					 echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/pearInquntity/'.
					$value['Activityevaluationvalue']['id'].'/1')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>40, 'height'=>30, 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
	</tr>
	<?php }?>
  <?php endforeach;?>
</table>
<p class="actions"> <?php echo $this->Html->link(__('list'), array('action' => 'index')); ?></p>
