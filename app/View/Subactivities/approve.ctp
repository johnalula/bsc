<h2><?php echo __('Subactivities');?></h2>
<table cellpadding="0" cellspacing="0">
<div id="bottom_section" class="article_bottom_section">
<?php
    //foreach ($activities as $activity):
   $activity=-1;
    foreach ($subactivities as $subactivity):
    if($activity != $subactivity['Subactivity']['majoractivity_id']){
         $activity = $subactivity['Subactivity']['majoractivity_id'];
         echo '<tr class=success><td colspan = 3>'.$subactivity['Majoractivity']['activity_name'].'</td><td>'.$subactivity['Period']['period_name'].'</td></tr>';
        echo '<tr><th>'.$this->Paginator->sort('sub_activity').'</th>';	
	
        echo '<th>'.$this->Paginator->sort('starting_date').'</th>';
	echo '<th>'.$this->Paginator->sort('ending_date').'</th>';	
		
	echo '<th class="actions">'. __('Aproval').'</th>';
?>
 
        <?php
            echo $this->element(
                'related_subactivities',
            array(
            'activity_id' => $subactivity['Majoractivity']['id']
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


