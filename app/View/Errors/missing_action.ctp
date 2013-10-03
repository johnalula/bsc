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
				<span class="umstyle1"><?php echo __('Page not found'); ?></span>
				<span class="umstyle2" style="float:right"><?php echo $this->Html->link(__("Home",true),"/") ?></span>
				
			</div>
			<div class="umhr"></div>
			<div class="um_box_mid_content_mid">
				<div class="um_box_mid_content_mid_left">
				<m><?php printf(
		__d('cake', 'The requested address %s was not found on this server.'),
		"<strong>'{$url}'</strong>"
	); ?></m> <span  class="umstyle6"><?php echo $this->Html->link(__("Home",true),"/") ?></span><br/><br/>
					<br/><br/>
				</div>
				<div class="um_box_mid_content_mid_right" align="right"></div>
				<div style="clear:both"></div>
			</div>
		</div>
	</div>
	<div class="um_box_down"></div>
</div>
