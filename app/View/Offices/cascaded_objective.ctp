<h2><?php echo __('Cascade Objective in ').$officename.__(' Office'); ?></h2>

<table>
	<tr>
		<th>Perspective</th>
		<th>Objective Name</th>
		<th>Measurs</th>
	</tr>
	
      	<?php  if($rows)
              	foreach ($rows as $row): ?>
                	<tr> 
 				<td><?php echo $row['p']['perspective_name'] ?></td>
				<td><?php echo $row['o']['objective_name'] ?></td>
				<?php echo $this->element('related_measurs',array('objective_id' => $row['obof']['objective_id'])); ?>
			</tr>
		<?php endforeach;?>

</table>
