<?php
/**
	CakePHP FusionCharts Plugin

	Copyright (C) 2009-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/

class CombinationDemoController extends FusionChartsAppController
{
	var $name = 'CombinationDemo';
	var $components = array('FusionCharts.FusionCharts');
	var $helpers = array('FusionCharts.FusionCharts');
	var $uses = array();
	//var $layout = 'chart.demo';

	/**
	 * FusionCharts component
	 *
	 * @var FusionChartsComponent
	 */
	var $FusionCharts = null;

	function column3dlinedy()
	{
		$this->FusionCharts->create
			(
				'Column3DLineDY Chart',
				array
				(
					'type' => 'MSColumn3DLineDY',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Column3DLineDY Chart',
				array
				(
					'caption'				=> 'Sales',
					'PYAxisName'			=> 'Revenue',
					'SYAxisName'			=> 'Quantity',
					'numberPrefix'			=> '$',
					'showvalues'			=> '0',
					'numDivLines'			=> '4',
					'formatNumberScale'		=> '0',
					'decimalPrecision'		=> '0',
					'anchorSides'			=> '10',
					'anchorRadius'			=> '3',
					'anchorBorderColor'		=> '009900'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Column3DLineDY Chart',
				array
				(
					'March',
					'April',
					'May',
					'June',
					'July'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Column3DLineDY Chart',
				array
				(
					'Product A' => array
					(
						'params' => array('color' => 'AFD8F8', 'showValues' => '0'),
						'data' => array
						(
							array('value' => '25601.34'),
							array('value' => '20148.82'),
							array('value' => '17372.76'),
							array('value' => '35407.15'),
							array('value' => '38105.68')
						)
					),
					'Product B' => array
					(
						'params' => array('color' => 'F6BD0F', 'showValues' => '0'),
						'data' => array
						(
							array('value' => '57401.85'),
							array('value' => '41941.19'),
							array('value' => '45263.37'),
							array('value' => '117320.16'),
							array('value' => '114845.27')
						)
					),
					'Total Quantity' => array
					(
						'params' => array('color' => '8BBA00', 'showValues' => '0', 'parentYAxis' => 'S'),
						'data' => array
						(
							array('value' => '45000'),
							array('value' => '44835'),
							array('value' => '42835'),
							array('value' => '77557'),
							array('value' => '92633')
						)
					)
				)
			);
	}

	function column2dlinedy()
	{
		$this->FusionCharts->create
			(
				'Column2DLineDY Chart',
				array
				(
					'type' => 'MSColumn2DLineDY',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Column2DLineDY Chart',
				array
				(
					'caption'				=> 'Sales',
					'PYAxisName'			=> 'Revenue',
					'SYAxisName'			=> 'Quantity',
					'numberPrefix'			=> '$',
					'showvalues'			=> '0',
					'numDivLines'			=> '4',
					'formatNumberScale'		=> '0',
					'decimalPrecision'		=> '0',
					'anchorSides'			=> '10',
					'anchorRadius'			=> '3',
					'anchorBorderColor'		=> '009900'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Column2DLineDY Chart',
				array
				(
					'March',
					'April',
					'May',
					'June',
					'July'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Column2DLineDY Chart',
				array
				(
					'Product A' => array
					(
						'params' => array('color' => 'AFD8F8', 'showValues' => '0'),
						'data' => array
						(
							array('value' => '25601.34'),
							array('value' => '20148.82'),
							array('value' => '17372.76'),
							array('value' => '35407.15'),
							array('value' => '38105.68')
						)
					),
					'Product B' => array
					(
						'params' => array('color' => 'F6BD0F', 'showValues' => '0'),
						'data' => array
						(
							array('value' => '57401.85'),
							array('value' => '41941.19'),
							array('value' => '45263.37'),
							array('value' => '117320.16'),
							array('value' => '114845.27')
						)
					),
					'Total Quantity' => array
					(
						'params' => array('color' => '8BBA00', 'showValues' => '0', 'parentYAxis' => 'S'),
						'data' => array
						(
							array('value' => '45000'),
							array('value' => '44835'),
							array('value' => '42835'),
							array('value' => '77557'),
							array('value' => '92633')
						)
					)
				)
			);
	}
}
