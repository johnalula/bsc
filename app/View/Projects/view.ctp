<h2><?php  echo __('Project'); ?></h2>
	<table><tr><td>
		<h3>
			<?php echo h($project['Project']['project_name']); ?>
			&nbsp;
		</h3></td></tr>
<tr><td>
		<dt><?php echo __('Initiative '); ?>:
			<h4><?php echo h($project['Initiative']['initiative_name']); ?>
			&nbsp;
		</h4></dd>
	</td></tr>
<tr><td class="actions">
	<?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> 
	<?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> 
	<?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> 
	<?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?>
</td></tr></table>
