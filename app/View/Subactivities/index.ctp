<h2><?php __('Subactivities');?></h2>
<table cellpadding="0" cellspacing="0">
<tr>
	
	<!--<th><?php echo $this->Paginator->sort('created');?></th>
	<th><?php echo $this->Paginator->sort('modified');?></th>-->
	<th><?php echo $this->Paginator->sort('plan_year');?></th>
        <th><?php echo $this->Paginator->sort('majoractivity_id');?></th>
	<th><?php echo $this->Paginator->sort('Period_id');?></th>
	
	<th><?php echo $this->Paginator->sort('subactivity_name');?></th>
	<!--<th><?php echo $this->Paginator->sort('is_approved');?></th>-->
	
	<th class="actions"><?php echo __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($subactivities as $subactivity):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<!--<td>
			<?php echo $subactivity['Subactivity']['id']; ?>
		</td>
		<td>
			<?php echo $subactivity['Subactivity']['created']; ?>
		</td>
		<td>
			<?php echo $subactivity['Subactivity']['modified']; ?>
		</td>-->
		<td>
			<?php echo $subactivity['Subactivity']['year']; ?>
		</td>
               <td>       
			<?php echo $this->Html->link($subactivity['Majoractivity']['activity_name'], array('controller' => 'majoractivities', 'action' => 'view', $subactivity['Majoractivity']['id'])); ?>
		</td>
		<td>
			<?php echo $subactivity['Period']['period_name']; ?>
		</td>
		
		<td>
			<?php echo $subactivity['Subactivity']['subactivity_name']; ?>
		</td>
		<!--<td>
			<?php echo $subactivity['Subactivity']['is_approved']; ?>
		</td>-->
		
		<td class="actions">
			<?php echo $this->Html->link('View',  array('action' => 'view', $subactivity['Subactivity']['id'])); ?>
			<?php echo $this->Html->link('Edit',  array('action' => 'edit', $subactivity['Subactivity']['id'])); ?>
			<?php echo $this->Html->link('Delete',  array('action' => 'delete', $subactivity['Subactivity']['id']), null, sprintf(__('Are you sure you want to delete # %s?',  $subactivity['Subactivity']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
<div class="paging">
	<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $this->Paginator->numbers();?>
	<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
<table>
	<tr>
		<td rowspan="2"><li><?php echo $this->Html->link('New Subactivity',  array('action' => 'add')); ?></li></td>
		<td><li><?php echo $this->Html->link('List Activitymonths',  array('controller' => 'activitymonths', 'action' => 'index')); ?> </li></td>
    </tr>
	</ul>
</table>
</div>
</div>


