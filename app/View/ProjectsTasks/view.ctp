<div class="projectsTasks view">
<h2><?php  echo __('Projects Task'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectsTask['ProjectsTask']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projectsTask['ProjectsTask']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projectsTask['ProjectsTask']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Task Name'); ?></dt>
		<dd>
			<?php echo h($projectsTask['ProjectsTask']['task_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectsTask['Project']['id'], array('controller' => 'projects', 'action' => 'view', $projectsTask['Project']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projects Task'), array('action' => 'edit', $projectsTask['ProjectsTask']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projects Task'), array('action' => 'delete', $projectsTask['ProjectsTask']['id']), null, __('Are you sure you want to delete # %s?', $projectsTask['ProjectsTask']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects Tasks'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects Task'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
