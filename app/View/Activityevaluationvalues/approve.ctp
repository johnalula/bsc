<h2><?php echo __('Activity Evaluation Aproval'); ?></h2>
<table cellspacing="0" cellpadding="0" width="100%" border="0" >
</tr>
<th>Name</th>
<th>Activity</th>
<th>Self</th>
<th>Pear</th>
<th>Head</th>
</tr>
<?php foreach($activityevaluationvalues as $value):?>
	<tr>	
		<td><?php echo $value['User']['first_name']." ".$value['User']['last_name']; ?></td>
		<td><?php echo $value['Activity']['activity'];?></td>
		<td>
		<?php $selfs =($value['Activityevaluationvalue']['in_quality']*$value['Activityevaluationvalue']['in_time']*$value['Activityevaluationvalue']['in_quantity']);
			if($value['Activityevaluationvalue']['self']<1 ){
			 echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addself/'.
					$value['Activityevaluationvalue']['id'].'/'.(($value['Activityevaluationvalue']['in_quality']+$value['Activityevaluationvalue']['in_time']+$value['Activityevaluationvalue']['in_quantity'])/3))."'>".$this->Html->image('dis.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
			}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addself/'.
					$value['Activityevaluationvalue']['id'].'/0')."'>".$this->Html->image('app.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Activityevaluationvalue']['pear']<1){
			 echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addpear/'.
					$value['Activityevaluationvalue']['id'].'/'.(($value['Activityevaluationvalue']['pIn_quality']+$value['Activityevaluationvalue']['pIn_time']+$value['Activityevaluationvalue']['pIn_quantity'])/3))."'>".$this->Html->image('dis.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
			}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addpear/'.
					$value['Activityevaluationvalue']['id'].'/0')."'>".$this->Html->image('app.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
		<td>
		<?php if($value['Activityevaluationvalue']['head']<1){
			 echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addhead/'.
					$value['Activityevaluationvalue']['id'].'/'.(($value['Activityevaluationvalue']['hIn_quality']+$value['Activityevaluationvalue']['hIn_time']+$value['Activityevaluationvalue']['hIn_quntity'])/3))."'>".$this->Html->image('dis.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
			}else{
					   echo "<span class='icon'><a href='".$this->Html->url('/activityevaluationvalues/addhead/'.
					$value['Activityevaluationvalue']['id'].'/0')."'>".$this->Html->image('app.png',array('border'=>'0', 'alt'=>'chose Four'))."</a></span>"; 
					}?>
		</td>
</tr>
<?php endforeach;?>
</table>
<p class="actions"> <?php echo $this->Html->link(__('list'), array('action' => 'index')); ?></p>
