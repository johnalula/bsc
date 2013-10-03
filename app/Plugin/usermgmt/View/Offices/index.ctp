<?php echo $this->Html->css('main');?>
<?php
/*
	This file is part of UserMgmt.

	Author: Chetan Varshney (http://ektasoftwares.com)

	UserMgmt is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	UserMgmt is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<div class="umtop">
	<?php echo $this->Session->flash(); ?>
	
	<div class="um_box_up"></div>
	<div class="um_box_mid">
		<div class="um_box_mid_content">
			<div class="um_box_mid_content_top">
				<span class="umstyle1"><?php echo __('All Office'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				<!--<div style="clear:both"></div>-->
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid" id="index">
				<table cellspacing="0" cellpadding="0" width="100%" border="0" >
					<thead>
						<tr>
							
							<th><?php echo __('Name');?></th>
							<th><?php echo __('Reports To');?></th>
							<th><?php echo __('Created');?></th>
							<th><?php echo __('Action');?></th>
						</tr>
					</thead>
					<tbody>
			<?php       if (!empty($offices)) {
							$sl=0;
							foreach ($offices as $row) {
								$sl++;
						echo "<tr>";
					        echo "<td>".h($row['Office']['name'])."</td>";		
                                                echo "<td>".h($row['Office']['reports_to'])."</td>";
                                                echo "<td>".h($row['Office']['created'])."</td>";                
						echo "<td>";
						echo "<span class='icon'><a href='".$this->Html->url('/editUser/'.$row['User']['id'])."'><img src='".SITE_URL."usermgmt/img/edit.png' border='0' alt='Edit' title='Edit'></a></span>";
						echo "</td></tr>";
							}
						} else {
							echo "<tr><td colspan=10><br/><br/>No Data</td></tr>";
						} ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
