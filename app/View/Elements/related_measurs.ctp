 <?php
    $RelatedArticles = $this->requestAction('/objectives/getRelatedMeasures/'.$objective_id);
    ?>
   <td>
        <?php
        foreach($RelatedArticles as $RelatedArticle){
        ?>
        <?php echo '-'.$RelatedArticle['Measure']['measure_name']; ?>
	</br>
        <?php
        }
        ?>
   </td>
