<?php 
/* =============================
Hairduct - Your media condensed
Copyright (C)  bryan 2011

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
=============================*/

echo doctype();
$meta = array(
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'description', 'content' => 'HairDuct, its awesome'),
        array('name' => 'keywords', 'content' => ''),
        array('name' => 'robots', 'content' => 'no-cache'),
        array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv')
    );
echo meta($meta);
    
?>
<html>
	<head>
        <title id="title">HairDuct</title>
        <?php 
        echo link_tag('asset/css/normalize.css');
        echo link_tag('asset/css/main.css');
       // echo link_tag('favicon.ico', 'shortcut icon', 'image/ico');
        ?>
  <!--  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
        <script src="asset/js/tabs.js"></script> --> 
        
    </head>
    <body class="no-select ">

        <div class="fancy" id="sidebar">
            <img alt="" src="images/hairduct.png" id="icon">
            <div id="tab-container">
                <div class="tab <?php echo ($this->uri->segment(1) == 'home') ? 'active' : ''  ?>" title="tab-1"><?php echo anchor('home', 'Home', 'title="Home"'); ?></div>                          
                <div class="tab <?php echo ($this->uri->segment(1) == 'settings') ? 'active' : ''  ?>" title="tab-2"><?php echo anchor('settings', 'Settings', 'title="Settings"'); ?></div>
             <?php 
                $xml = simplexml_load_file($this->config->item('xml'));
              		foreach ($xml as $key => $value){
              			if ($key == 'links') {
              				foreach ($value as $k => $v){ ?>
              					<div class="tab <?php echo ($this->uri->segment(1) == $v) ? 'active' : ''  ?>" title="tab-2"><?php echo anchor($v, $v, 'title="'.$v.'"'); ?></div>
              <?php  
           				
              				}
              			}
              			
              		}
                
                
                ?>           
              		             
           </div>
        </div>
             <div id="content">
          <?php    
              	
             echo heading($this->uri->segment(1), 1);
 /*
Filename: header.php
*/