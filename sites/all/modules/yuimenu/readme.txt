Installation
------------
- Copy the yui module into Drupal modules directory.
- Login as an administrator. Enable the module in the "Administer" -> "Site building" -> "modules"
- Edit the settings under "Administer" -> "Site configuration" -> "YUI Menu Settings" to select the root menu.
- Modify your page.tpl.php described in "How to modify page.tpl.php"  


Important Notes:
----------------
The theme should appropriate to use this a drop down menu. Some css based themes may have display problems.
For instance garland is an exception because of the phptemplate.
To active the menu you have to add a short text in to your active page.tpl.php.

How to add menu
---------------
To add the menu there is two different approach.
1- Block approach
   Use the site buildings->blocks->YUI Menu. 
   This option may have design problem on drowdown. So istead of that you can use the second option.
   Do not forget to specify the Site configuration->YUI Menu Settings->Menu Display type to have the correct direction.
2- Modify paga.tpl.php approach
   Modify the page.tpl.php file for accurate place. 

Not: if you use the Top dropdown the yui block menu will be disappear, if you use the left drop down the menu in page.tpl.php
     will disappear. Currently one of them can be displayed.   

How to modify page.tpl.php
--------------------------
1- Open your page.tpl.php file under theme/yourtheme directory.
2- Add the following lines to proper place as follows in examples
   <?php if (module_hook('yuimenu','menu') && ("tns" == variable_get('yuimenu_type','tns') || "tnm"==variable_get('yuimenu_type','tns')) ){?>
	<?php print html_menu(variable_get('yuimenu_root','1') ); ?>
   <?php }?>
    
	Example in foliage page.tpl.php
	-------------------------------
	  <tr id="headerbottom">
	    <td colspan="2"><div><?php print $header ?>&nbsp;</div></td>
	  </tr>
	  
	  <!-- YUI Menu Start -->
	  <?php if (module_hook('yuimenu','menu') && ("tns" == variable_get('yuimenu_type','tns') || "tnm"==variable_get('yuimenu_type','tns')) ){?>
		  <tr id="headerbottom">
		    <td colspan="2">
		    	<div id="yuimenu">
			      	<?php print html_menu(variable_get('yuimenu_root','1') ); ?>
		    	</div>
		    </td>
		  </tr>
	  <?php }?>
	  <!-- YUI Menu End-->
	  
	  </table>    
	
	Example in bluebreeze page.tpl.php
	-------------------------------
	    <?php if ($header): ?>
	        <div id="header-region">
	          <?php print $header ?>
	        </div>
	      <?php endif; ?>
	      
	    </div>
	    
	    <!-- YUI Menu Start -->
	    <?php if (module_hook('yuimenu','menu') && ("tns" == variable_get('yuimenu_type','tns') || "tnm"==variable_get('yuimenu_type','tns')) ){?>
	    	<div id="yuimenu">
		      	<?php print html_menu(variable_get('yuimenu_root','1') ); ?>
	    	</div>
		<?php }?>
	    <!-- YUI Menu End-->
	    
	    <div id="container" class="<?php if ($sidebar_left) { print "withleft"; } if ($sidebar_right) { print " withright"; }?> clear-block">
	      <div id="main-wrapper">
	      <div id="main" class="clear-block">