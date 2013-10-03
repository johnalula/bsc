<h2><?php echo __('Report`s Of '.$officename.' office By Theme'); ?></h2>
<?php echo $this->Form->create('Report'); ?>
<table cellpadding="0" cellspacing="0"> 
	<tr>
	  
            <td> <?php echo $this->Form->input('year_id',array('type'=>'select','options'=>$year,'empty'=>'select year'));?> </td>
            <td > <?php echo $this->Form->input('period_id',array('empty' => 'select a period')); ?> </td> 
	    <td> <?php echo $this->Form->input('theme_id',array('empty' => 'select a perspective')); ?> </td>  </tr>
	<tr><td > <?php echo $this->Form->end(__('Generate Report')); ?> </td></tr> 
	
	 <tr>
            <th>Measure</th>
            <th>Period</th>
	    <th>Target</th>
	    <th>Actual</th>
	</tr>
</table>
<?php
$this->Js->get('#ReportPeriodId')->event('change', 
	$this->Js->request(array(
		'controller'=>'themes',
		'action'=>'getThemeReportByOfficeId'
		), array(
		'update'=>'#ReportThemeId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>
<?php
$this->Js->get('#ReportYearId')->event('change', 
	$this->Js->request(array(
		'controller'=>'periods',
		'action'=>'getFromTargetByYearAndByOfficeId'
		), array(
		'update'=>'#ReportPeriodId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>
