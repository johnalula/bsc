<h2><?php echo __('Add Initiative'); ?></h2>
<?php echo $this->Form->create('Initiative'); ?>
		<table>
		<tr><td><?php echo $this->Form->input('initiative_name');?> </td><td rowspan="2"><?php echo $this->Form->input('Owner',array(
            'type' => 'select',
            'multiple' => true,
            'label' => "Owner (Select multiple entries with CTRL)",
            'size' => 6)); ?> </td></tr>
                <tr><td><?php echo $this->Form->input('budget'); ?> </td></tr>
		<tr><td><?php echo $this->Form->input('initiative_importance',array('rows'=>'3'));?> </td><td rowspan="2"><?php echo $this->Form->input('Implimenter',array(
            'type' => 'select',
            'multiple' => true,
            'label' => "Implimenter (Select multiple entries with CTRL)",
            'size' => 8)); ?></td></tr>
		<tr><td><?php echo $this->Form->input('deliverable',array('rows'=>'3')); ?>  </td> </tr>
                <tr> <td><?php echo $this->Form->input('initiative_description',array('rows'=>'3')); ?> </td><td rowspan="2"><?php echo $this->Form->input('Objective',array(
            'type' => 'select',
            'multiple' => true,
            'label' => "Objective (Select multiple entries with CTRL)",
            'size' => 10)); ?></td></tr>
		<tr><td><?php echo $this->Form->input('start_date'); ?>  <?php echo $this->Form->input('end_date'); ?>  </td></tr>
		<tr><td><?php echo $this->Form->end(__('Submit')); ?> </td>
		<td class="actions">
		<?php echo $this->Html->link(__('List Initiatives'), array('action' => 'index')); ?>
		<?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> 
		<?php echo $this->Html->link(__('List Objectives'), array('controller' => 'objectives', 'action' => 'index')); ?> 
		<?php echo $this->Html->link(__('New Objective'), array('controller' => 'objectives', 'action' => 'add')); ?> 
	</td></tr>
</table>

	

