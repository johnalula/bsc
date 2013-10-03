<div>
    <?php
    $RelatedArticles = $this->requestAction('/objectivecascadeds/getRelatedActivities/'.$objective_id);
                                                 
     ?>
    <ul>
        <?php
        foreach($RelatedArticles as $RelatedArticle){
        ?>
        <tr>
            <td><?php echo $RelatedArticle['Activity']['name']; ?></td>
            <td><?php echo $RelatedArticle['Activity']['weight']; ?></td>
            <td><?php echo $RelatedArticle['Activity']['baseline']; ?></td>
            <td><?php echo $RelatedArticle['Activity']['target']; ?></td>
            <td><?php echo $RelatedArticle['Activity']['actual_value']; ?></td>
            <td><?php echo $RelatedArticle['Activity']['accomplishmentperiod_id']; ?></td>
            <td class="actions">
                  <?php 
                         if ($RelatedArticle['Activity']['is_approved']==0) {
			 echo "<span class='icon'><a href='".$this->Html->url('/activities/makeAproveDisAprove/'.$RelatedArticle['Activity']['id'].'/1')."'><img src='"."/img/dis-approve.png' border='0' alt='Make Approve' title='Make Approve'></a></span>";
			} else {
			echo "<span class='icon'><a href='".$this->Html->url('/activities/makeAproveDisAprove/'.$RelatedArticle['Activity']['id'].'/0')."'><img src='"."/img/approve.png' border='0' alt='Make DisAprove' title='Make DisAprove'></a></span>";
							}
                       echo "<span class='icon'><a href='".$this->Html->url('/activities/remark/'.$RelatedArticle['Activity']['id'])."'><img src='"."/img/remark.png' border='0' alt='Remark' title='Remark'></a></span>";    
                     ?>
			
		</td>
             
        </tr>
        <?php
        }
        ?>
    </ul>
</div>
