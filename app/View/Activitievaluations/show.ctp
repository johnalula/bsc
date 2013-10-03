<h2><?php echo __('Activities in ').$officename.__(' office'); ?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo __('Perspective') ?></th> 
	<th><?php echo __('Activity') ?></th> 
	<th><?php echo __('weight') ?></th> 
	<th><?php echo __('Ways of Evaluation ') ?></th>
	<th><?php echo __('Pre condition from office') ?></th> 
	<th><?php echo __('Rank') ?></th> 
	<th><?php echo __('In Quality') ?></th> 
	<th><?php echo __('In Time') ?></th> 
	<th><?php echo __('In Quntity') ?></th>
</tr>
	<?php foreach($activities as $activity){ ?>
  <tr>	<td rowspan = '4'> <?php echo $activity['Perspective']['perspective_name']; ?></td>
	<td rowspan = '4'> <?php $strs=explode("-",$activity['Activity']['activity']); 
						$i=0; 
					foreach($strs as $str):
                                              if($i == 1){ echo '</br>-'.$str;}
                                              	else {echo $str;}
						$i=1;
                                               endforeach;?></td>
	<td rowspan = '4'> <?php echo $activity['Activity']['weight']; ?></td>
	<td rowspan = '4'> <?php $strs=explode("-",$activity['Activity']['ways_of_evaluation']);
						$j=0; 
					foreach($strs as $str):
						if($j == 1){ echo '</br>-'.$str;}
                                              	else {echo $str;}
						$j=1;
                                               endforeach;?></td>
	<td rowspan = '4'> <?php $strs=explode("-",$activity['Activity']['precondition_from_office']);
						$k=0; 
					foreach($strs as $str):
						if($k == 1){ echo '</br>-'.$str;}
                                              	else {echo $str;}
						$k=1;
                                               endforeach;?></td>
	<?php
            echo $this->element(
                'related_Activityevaluations',
            array(
            'activity_id' => $activity['Activity']['id']
            )
        );
        ?>
     <?php }// endforeach;  ?>
</table>
	
