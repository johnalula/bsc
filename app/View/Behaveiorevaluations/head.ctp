<h2><?php echo __('Head Behaveiorevaluation'); ?></h2>
<table cellspacing="0" cellpadding="0" width="100%" border="0" >
	<th>Name</th>
	<th>Indicators</th>
	<th>Is Four (4)</th>
	<th>Is Three (3)</th>
	<th>Is Two (2)</th>
	<th>Is One (1)</th></tr>
  <?php foreach($behaveiorevaluation as $value):?>
	<tr><td>
		<?php echo $value['User']['first_name']." ".$value['User']['last_name']; ?>		
		</td>
		<td>
		<?php echo $value['Indicator']['indicator_name']; ?>		
		</td>
		<td>
		<?php if($value['Behaveiorevaluation']['head']==4){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addhead/'.
					$value['Behaveiorevaluation']['id'].'/4')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>50, 'height'=>20,'alt'=>'chose Four'))."</a></span>"; 
					}?>
		 </td>
		<td>
		<?php if($value['Behaveiorevaluation']['head']==3){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addhead/'.
					$value['Behaveiorevaluation']['id'].'/3')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>50, 'height'=>20,'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Behaveiorevaluation']['head']==2){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addhead/'.
					$value['Behaveiorevaluation']['id'].'/2')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>50, 'height'=>20,'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Behaveiorevaluation']['head']==1){
					echo "<span class='icon'>".$this->Html->image('ok.png',array('border'=>'0', 'alt'=>'chose Four'))."</span>";
					}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/behaveiorevaluations/addhead/'.
					$value['Behaveiorevaluation']['id'].'/1')."'>".$this->Html->image('okn.png',array('border'=>'0', 'width'=>50, 'height'=>20,'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
	</tr>
  <?php endforeach;?>
</table>
 <p class="actions"> <?php echo $this->Html->link(__('list'), array('action' => 'index')); ?></p>
