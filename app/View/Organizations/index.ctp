	<h2><?php echo __('Organization'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<!--<tr>
			
			<th><?php echo $this->Paginator->sort('organization_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mission'); ?></th>
			<th><?php echo $this->Paginator->sort('vision'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th><?php echo $this->Paginator->sort('motto'); ?></th>
			<th><?php echo $this->Paginator->sort('logo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
                   <?php echo h($organization['Organization']['logo']); ?>&nbsp;</td>
	</tr>-->
	<?php
	foreach ($organizations as $organization): ?>
         <tr><td colspan ="4"><h3><?php echo h($organization['Organization']['organization_name']); ?>&nbsp;</td></h3></tr>
	<tr>
		
		
		<td><h3><?php echo __('Mission'); ?>:-</h3><h4><p><?php echo h($organization['Organization']['mission']); ?>&nbsp;</p></h4>
		<h3><?php echo __('Vision'); ?>:-</h3><h4><p><?php echo h($organization['Organization']['vision']); ?>&nbsp;</p></h4>
		<h3><?php echo __('Values'); ?>:-</h3><h4><p><?php $strs=explode("-",$organization['Organization']['value']);
						$i=0; 
					foreach($strs as $str):
						if($i != 0){ echo '</br>-'.$str;}
                                              	else {echo $str;}
						$i=1;
                                               endforeach;?>&nbsp;</p></h4>
		<h3><?php echo __('Motto'); ?>:-</h3><h4><p><?php echo h($organization['Organization']['motto']); ?>&nbsp;</p></h4>
		<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $organization['Organization']['id'])); ?>
		
	</tr>
<?php endforeach; ?>
	
	<!--<tr><td colspan="4">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</td></tr>

	<tr><td class="paging"  colspan="4">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</td></tr>
<tr><td class="actions"  colspan="4">
	
	<?php echo $this->Html->link(__('New Organization'), array('action' => 'add')); ?>
	<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
	<?php echo $this->Html->link(__('List Offices'), array('controller' => 'offices', 'action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Office'), array('controller' => 'offices', 'action' => 'add')); ?> 
	</td></tr>-->
</table>
