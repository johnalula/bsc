<?php echo $this->Html->css('main');?>
<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d(__('cake_dev'), 'BSC:ሚ.ው.ስ');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->CSS('menustyle.css');
		echo $this->Html->CSS('sdmenu.css');
                echo $this->Html->css('/usermgmt/css/umstyle');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

        echo $this->Html->script(array( 'jquery.min.js'));
           	
	    echo $this->Html->script(array( 'jqueryslidemenu.js'));
	    echo $this->Html->script(array('sdmenu.js'));
	?>

<script type="text/javascript">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="sdmenu/sdmenu.css" />
	<script type="text/javascript" src="sdmenu/sdmenu.js">
		/***********************************************
		* Slashdot Menu script- By DimX
		* Submitted to Dynamic Drive DHTML code library: http://www.dynamicdrive.com
		* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
		***********************************************/
	</script>
	<script type="text/javascript">
	// <![CDATA[
	var myMenu;
	window.onload = function() {
		myMenu = new SDMenu("my_menu");
		myMenu.init();
	};
	// ]]>
	</script>
</script>
</head>
<body>
    <div id="container">
	  <div id="banner">
	  <?php echo $this->Html->image('banner.jpg', array('alt'=>'Banner Goes Here', 'width'=>'100%', 'height'=>'100', 'border'=>'0'))?>
          </div>
          <div class="menut">
                <ul id="navr">
                </ul>
	        <ul id="nav">
         
<li><?php  $num=$this->UserAuth->getUserId(); 
          
           if($num){echo $this->Html->link("logout","/logout");
           }else{echo $this->Html->link("login","/login");}?>
</li>
         <?php if($num){ ?>              
<li> <?php 
if(($this->Session->read('Config.language')=='amh')){
echo $this->Html->link('English', array('language'=>'eng'));
}
else{ echo $this->Html->link('አማርኛ', array('language'=>'amh'));} ?>
</li>                 
                 <li><a title="News" href="/news/index">News</a> </li>
		 <li><a href="#"><?php echo $this->Html->image('i-1.png', array('alt'=>'user')).$this->UserAuth->getUserFirstName().' '.$this->UserAuth->getUserLastName();if($num){echo '('.$this->UserAuth->getGroupName().')';} ?></a>
                 <div class="subs">
       		                <div>
       		                    <ul>
                                         <li><h3>Profile</h3>
                                        <ul>
                                   
                                   <li><?php echo $this->Html->link(__("  My profile ",true),"/myprofile") ?></li>
                                   <li><?php echo $this->Html->link(__("  Change profile ",true),"/editUser/".$this->UserAuth->getUserId()) ?></li>
                                   <li><?php echo $this->Html->link(__("  Change password ",true),"/changePassword") ?></li>
                                        </ul>
                                      </li>
                                    </ul>
                                </div>
                </div>
                </li>

			<li><a href="#"><?php echo $this->Html->image('notification.png', array('alt'=>'Notifications')) ?> </a>
        	            <div class="subs">
       		                <div>
       		                    <ul>
       		                         <li><h3>Plans</h3>
       		                             <ul>                            
				<li><a href="#">plan for the month of september</a></li>
                                <li><a href="#">plan for the month of september</a></li>
                                <li><a href="#">plan for the month of september</a></li>
	                                    </ul>
                                	</li>
                                	<li><h3>Report</h3>
       		                             <ul>                            
				<li><a href="#">Report for the month of september</a></li>
                                <li><a href="#">Report for the month of september</a></li>
                                <li><a href="#">Report for the month of september</a></li>
	                                    </ul>
                                	</li>
                                
        	                    </ul>
        	                </div>
        	            </div>
        	        </li>
                   </ul> 
			
        	</div>
          <div style="float: left" id="my_menu" class="sdmenu">  
                  <?php if($this->UserAuth->getGroupName()=="Staff"||$this->UserAuth->getGroupName()=="staff"){ ?>
			<div><span><?php echo __("BSC")?></span>  
					<?php echo $this->Html->link(__("Theme",true),"/themes/show") ?>
                 			<?php echo $this->Html->link(__("Perspective",true),"/perspectives/show") ?>
                                        <?php echo $this->Html->link(__("Objective",true),"/objectives/show") ?>
					<?php echo $this->Html->link(__("Measure",true),"/measures/show") ?>
                 			<?php echo $this->Html->link(__("Initiative",true),"/initiatives/show") ?>
                                        
			</div>
			<div><span><?php echo __("Evaluation")?></span> 
					<?php echo $this->Html->link(__("Activity Evaluation",true),"/activityevaluationvalues/index") ?>
                 			<?php echo $this->Html->link(__("Behavior Evaluation",true),"/behaveiorevaluations/index") ?>
			</div> 
			<div><span><?php echo __("Plan")?></span>  
					<?php echo $this->Html->link(__("Cascaded Objective",true),"/offices/cascadedObjective") ?>
                 			<?php echo $this->Html->link(__("Activitites",true),"/activitievaluations/show") ?>
					<?php echo $this->Html->link(__("Subactivity",true),"/subs/index") ?>
                                        <?php echo $this->Html->link(__("Aprove",true),"/subs/approve") ?>
                    		</div>
			<div><span><?php echo __("Report")?></span> 
					<?php echo $this->Html->link(__("Personal Report"),"/reports/personala")?>
			</div> 
                  <?php }else if($this->UserAuth->getGroupName()=="Admin"){ ?>
                         <div><span><?php echo __("Organization Settings")?></span>
               			
                                        <?php echo $this->Html->link(__("Organization",true),"/organizations/index") ?>
                 			<?php echo $this->Html->link(__("All Office",true),"/offices/index") ?>
                 			
                		</div>
			 <div><span><?php echo $this->Html->image('i-1.png')?> <?php echo __("User Settings")?></span>
               			
                                        
                 			<?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?>
                 			<?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?>
                 			<?php echo $this->Html->link(__("Add User",true),"/addUser") ?>
                                        <?php echo $this->Html->link(__("All Users",true),"/allUsers") ?>
                                        <?php echo $this->Html->link(__("Permissions",true),"/permissions") ?>
                                        <?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?>
                		  </div>
               		
                            <div><span><?php echo $this->Html->image('i-3.png')?><?php echo __("BSC Settings")?></span>
              		  		<?php echo $this->Html->link(__("Theme",true),"/themes/index") ?>
                                        <?php echo $this->Html->link(__("Perspective",true), "/perspectives/index") ?>
                                        <?php echo $this->Html->link(__("Objective",true),"/objectives/index")?>
                                        <?php echo $this->Html->link(__("Measure",true),"/measures/index") ?>
              		  		<?php echo $this->Html->link(__("Initiative",true),"/initiatives/index")?>         		 	
              				
             		        </div>
			  <div><span><?php echo __("Other Settings")?></span>
                 	 		<?php echo $this->Html->link(__("Measuring Units",true),"/units/index")?>
                                        <?php echo $this->Html->link(__("Frequency",true),"/frequencies/index")?>
                 	 		<?php echo $this->Html->link(__("Period",true), "/periods/index")?>
                 	 		
                 	 	</div>
			<div><span><?php echo __("Evaluation")?></span>
					<?php echo $this->Html->link(__("Threshold",true),"/thresholds/index")?>
                 	 		<?php echo $this->Html->link(__("Behavior Evaluation",true),"/behaveiorevaluations/index")?>
                                        <?php echo $this->Html->link(__("Activity Evaluation",true),"/activityevaluationvalues/index")?>
                 	 	</div>
                         <div><span><?php echo $this->Html->image('remark.png')?><?php echo __("Plan")?></span>
					 <?php echo $this->Html->link(__("Cascading",true),"/offices/cascadeObjective") ?>
                                        <?php echo $this->Html->link(__("Target",true),"/targets/index") ?>
                 			<?php echo $this->Html->link(__("Activity",true),"/activities/index") ?>
                 			<?php echo $this->Html->link(__("Activity Evaluation",true),"/activitievaluations/index") ?>
					<?php echo $this->Html->link(__("Subactivity",true),"/subs/index") ?>
                                        <?php echo $this->Html->link(__("Aprove",true),"/subs/approve") ?>
                 		</div>
                		
			 <div><span><?php echo __("Report")?></span>
			       <?php echo $this->Html->link(__("Predefined Report"),"/reports/predefined")?>
			       <?php echo $this->Html->link(__("Office Report"),"/reports/report")?>
				<?php echo $this->Html->link(__("Personal Report"),"/reports/personala")?>
                               <?php echo $this->Html->link(__("Dynamic Report",true),"/report_manager/reports")?>
                               <?php echo $this->Html->link(__("graph"),'/graphs');?>
                       </div>
     		<?php } else{ ?>
		     
			<div><span><?php echo __("BSC")?></span>  
					<?php echo $this->Html->link(__("Theme",true),"/themes/show") ?>
                 			<?php echo $this->Html->link(__("Perspective",true),"/perspectives/show") ?>
                                        <?php echo $this->Html->link(__("Objective",true),"/objectives/show") ?>
					<?php echo $this->Html->link(__("Measure",true),"/measures/show") ?>
                 			<?php echo $this->Html->link(__("Initiative",true),"/initiatives/show") ?>
                                        
			</div>
			<div><span><?php echo __("Evaluation")?></span> 
					<?php echo $this->Html->link(__("Activity Evaluation",true),"/activityevaluationvalues/index") ?>
                 			<?php echo $this->Html->link(__("Behavior Evaluation",true),"/behaveiorevaluations/index") ?>
			</div>
			<div><span><?php echo $this->Html->image('remark.png')?><?php echo __("Plan")?></span>
					 <?php echo $this->Html->link(__("Cascading",true),"/offices/cascadeObjective") ?>
                                        <?php echo $this->Html->link(__("Target",true),"/targets/index") ?>
                 			<?php echo $this->Html->link(__("Activity",true),"/activities/index") ?>
                 			<?php echo $this->Html->link(__("Activity Evaluation",true),"/activitievaluations/index") ?>
					<?php echo $this->Html->link(__("Subactivity",true),"/subs/index") ?>
                                        <?php echo $this->Html->link(__("Aprove",true),"/subs/approve") ?>
                 		</div>  
                    	 
                
		<div><span><?php echo __("Report")?></span>
			       <?php echo $this->Html->link(__("Predefined Report"),"/reports/predefined")?>
			       <?php echo $this->Html->link(__("Office Report"),"/reports/report")?>
				<?php echo $this->Html->link(__("Personal Report"),"/reports/personala")?>
                               <?php echo $this->Html->link(__("Dynamic Report",true),"/report_manager/reports")?>
                               <?php echo $this->Html->link(__("graph"),'/graphs');?>
                       </div>
		<?php } ?>            
          	</div>
           </div>
           <?php } ?>
       <div id="content">
         <?php echo $this->Session->flash(); ?>
         <?php echo $this->fetch('content'); ?>
       </div>

   
<script type="text/javascript">
jQuery(window).load(function() {

    $("#nav > li > a").click(function () { // binding onclick
        if ($(this).parent().hasClass('selected')) {
            $("#nav .selected div div").slideUp(100); // hiding popups
            $("#nav .selected").removeClass("selected");
        } else {
            $("#nav .selected div div").slideUp(100); // hiding popups
            $("#nav .selected").removeClass("selected");

            if ($(this).next(".subs").length) {
                $(this).parent().addClass("selected"); // display popup
                $(this).next(".subs").children().slideDown(200);
            }
        }
    }); 

});
</script>
</div> <!-- /.section, /#footer-wrapper -->
<!--<div id="footer">
	<?php echo $this->element('footer'); ?>
 <a>this is epha man</a>
</div>-->
</div>  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	<!-- scripts_for_layout -->
	<?php echo $scripts_for_layout; ?>
	<!-- Js writeBuffer -->
	<?php
	if (class_exists('JsHelper') && method_exists($this->Js, 'writeBuffer')) echo $this->Js->writeBuffer();
	// Writes cached scripts
	?>
</body>
</html>
