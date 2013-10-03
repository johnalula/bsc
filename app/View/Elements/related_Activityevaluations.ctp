
    <?php
    $RelatedArticles = $this->requestAction('/activities/getRelatedActivityevaluations/'.$activity_id);
    ?>
   
        <?php
        foreach($RelatedArticles as $RelatedArticle){
        ?>
        <td><?php echo $RelatedArticle['Activitievaluation']['rank']; ?></td>
	<td><?php echo $RelatedArticle['Activitievaluation']['in_quality']; ?></td>
	<td><?php echo $RelatedArticle['Activitievaluation']['in_time']; ?></td>
	<td><?php echo $RelatedArticle['Activitievaluation']['in_quntity']; ?></td>
	</tr><tr>
        <?php
        }
        ?>
    </ul>
</div
