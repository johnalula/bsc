<?php echo $this->Html->css('main');?>
<h2><?php echo __('Activities');?></h2>
<table cellpadding="0" cellspacing="0">
<div id="bottom_section" class="article_bottom_section">
<?php
    //foreach ($activities as $activity):
   $activity=-1;
    foreach ($majoractivities as $activity):
    if($objectives != $activity['Majoractivity']['objective_id']){
         $objectives = $activity['Majoractivity']['objective_id'];
         echo '<tr class=success><td colspan = 6>'.$activity['Majoractivity']['activity_name'].'</td><td>'.$activity['Period']['period_name'].'</td></tr>';
        echo '<tr><th>'.$this->Paginator->sort('name').'</th>';	
	echo '<th>'.$this->Paginator->sort('weight').'</th>';
        echo '<th>'.$this->Paginator->sort('baseline').'</th>';
	echo '<th>'.$this->Paginator->sort('target').'</th>';	
        echo '<th>'.$this->Paginator->sort('actual_value').'</th>';
	echo '<th>'.$this->Paginator->sort('accomplishmentperiod_id').'</th>';
	
	echo '<th class="actions">'. __('Aproval').'</th>';
?>
 
        <?php
            echo $this->element(
                'related_activities',
            array(
            'objective_id' => $activity['Objective']['id']
            )
        );
        ?>
    </div>
  </div>
<?php }
endforeach; ?>
</table>

<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
</div>
</div>


