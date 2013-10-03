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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
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
	  <div id="banner" ><img src="/img/banner.jpg" alt="Banner Goes Here" width="100%"   height="100" border="0" />
          </div>
          <div class="menut">
                <ul id="navr">
                </ul>
	        <ul id="nav">
         
<li><?php  $num=$this->UserAuth->getUserId(); 
           if($num){echo $this->Html->link("logout","/logout");}
           else{echo $this->Html->link("login","/login");}?>
</li>
                        
<li> <?php 
if(($this->Session->read('Config.language')=='amh')){
echo $this->Html->link('English', array('language'=>'eng'));
}
else{ echo $this->Html->link('አማርኛ', array('language'=>'amh'));} ?>
</li>                 
                 <li><a title="News" href="news/index">News</a> </li>
		 <li><a href="#"><?php echo $this->Html->image('i-1.png', array('alt'=>'user')).$this->UserAuth->getUserFirstName().' '.$this->UserAuth->getUserLastName().'('.$this->UserAuth->getGroupName().')'; ?></a>
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
          <!--<div id="myslidemenu" class="jqueryslidemenu">
               <ul>
		<li><?php  $num=$this->UserAuth->getUserId(); 
                                      if($num){echo $this->Html->link("logout","/logout");}
                                      else{echo $this->Html->link("login","/login");}?></a></li>
                 <li> <?php echo $this->Html->link('English', array('language'=>'eng'));?></li>
                 <li> <?php echo $this->Html->link('አማርኛ', array('language'=>'amh')); ?></li>
                 
                 <li><a title="University" href="/universities/index">University</a> </li>
                 <li><a title="News" href="/news/index">News</a> </li>
                 <li><?php echo $this->Html->link('Report','/charts/samplereport.html');?> </li>
               </ul>     
           </div>-->
         <!--div id="leftmenu"--><div style="float: left" id="my_menu" class="sdmenu">


              <!--div id="menu"-->
                 <!--ul class="navmenu">
                      <li-->
			 <div><span>User Settings</span>
               			<!--ul class="submenu"-->
                                        <?php echo $this->Html->link(__("All Office",true),"/offices/index") ?>
                 			<?php echo $this->Html->link(__("Add Group",true),"/addGroup") ?>
                 			<?php echo $this->Html->link(__("All Groups",true),"/allGroups") ?>
                 			<?php echo $this->Html->link(__("Add User",true),"/addUser") ?>
                                        <?php echo $this->Html->link(__("All Users",true),"/allUsers") ?>
                                        <?php echo $this->Html->link(__("Permissions",true),"/permissions") ?>
                                        <?php echo $this->Html->link(__("Profile",true),"/viewUser/".$this->UserAuth->getUserId()) ?>
                		<!--/ul--></div>
               		<!--/li>
                     <li> 
                        <div class="menutop"><a href="#">BSC Setings</a><div class="toggle">-</div></div>
                            <ul class="submenu"-->
                            <div><span>BSC Settings</span>
              		  		<a title="Theme" href="/themes/index">Theme</a>
              		  		<a title="Initiative" href="/initiatives/index">Initiative</a>
              		 		<a title="Perspective" href="/perspectives/index">Perspective</a>
               		 		<a title="Objective" href="/objectives/index">Objective</a>
              				<a title="Measure" href="/measures/index">Measure</a>
             		        </div><!--/ul>
                     </li>
                      <li>
			  <div class="menutop"><a href="#"-->
			  <div><span>Other Setings</span><!--/a><div class="toggle">+</div></div>
                 		<ul class="submenu"-->
                 	 		<a title="Measuring Units" href="/units/index">Measuring Units</a>
                 	 		<a title="Period" href="/periods/index">Period</a>
                 	 		<a title="Period Look up" href="/periodlookups/index">Period Look up</a>
                 	 	</div><!--/ul>
                      </li>
   		      <li>
			 <div class="menutop"><a href="#"--><div><span>Plan</span><!--/a><div class="toggle">+</div></div>
               			<ul class="submenu"-->
                 			<a title="Activity" href="/activities/index">Activity</a>
                 			<a title="Subactivity" href="/subactivities/index">Sub Activity</a>
                                        <a title="Aprove" href="/subactivities/approve">Approval</a>
                 		</div>
                		<!--/ul>
               		</li>
                      <li>
			 <div class="menutop"-->
			 <div><span>Report</span>
			       <a href="/report_manager/reports">Report</a>
                               <?php echo $this->Html->link('graph','/graphs');?>
                         </div>
          	</div>
           </div>
       <div id="content">
         <?php echo $this->Session->flash(); ?>
         <?php echo $this->fetch('content'); ?>
       </div>

   <div id="footer">
    
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
	<!--<?php echo $this->element('sql_dump'); ?>-->
</div>  
  
</body>
</html>
