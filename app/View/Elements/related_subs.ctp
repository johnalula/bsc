<div>
    <?php
    $RelatedArticles = $this->requestAction('/activities/getRelatedSubactivities/'.$activity_id);
    ?>
    <ul>
        <?php
        foreach($RelatedArticles as $RelatedArticle){
        ?>
        <tr>
            <td><?php echo $RelatedArticle['Sub']['sub_activity']; ?></td>
            
            <td><?php echo $RelatedArticle['Sub']['starting_date']; ?></td>
            <td><?php echo $RelatedArticle['Sub']['ending_date']; ?></td>
            <td class="actions">
                  <?php 
                         if ($RelatedArticle['Sub']['is_approved']==0) {
			 echo "<span class='icon'><a href='".$this->Html->url('/subs/makeAproveDisAprove/'.$RelatedArticle['Sub']['id'].'/1')."'><img src='"."/img/dis-approve.png' border='0' alt='Make Approve' title='Make Approve'></a></span>";
			} else  if ($RelatedArticle['Sub']['is_approved']==1){
			echo "<span class='icon'><a href='".$this->Html->url('/subs/makeAproveDisAprove/'.$RelatedArticle['Sub']['id'].'/0')."'><img src='"."/img/approve.png' border='0' alt='Make DisAprove' title='Make DisAprove'></a></span>";
							}
                       echo "<span class='icon'><a href='".$this->Html->url('/subs/remark/'.$RelatedArticle['Sub']['id'])."'><img src='"."/img/remark.png' border='0' alt='Remark' title='Remark'></a></span>";    
                     ?>
			
		</td>
             
        </tr>
        <?php
        }
        ?>
    </ul>
</div>
