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

$attributes_label = array(
    'class' => 'clearfix',
    'style' => 'color: #000;',
);


?>    
    
    
  <?php echo heading('Welcome!', 1); ?>
  <?php echo heading('We noticed you havent setup the system yet. Let the fun begin.', 3); ?>
    
   <?php echo form_open('setup/save'); ?>
   
  <?php echo heading('Sabnzbd', 4); ?>
   <!--  http://wiki.sabnzbd.org/api -->
   
   <?php echo form_label('Enable Sabnzbd', 'enablesanzbd', $attributes_label); ?>
   <input type="checkbox" name="sab" value="1" <?php echo set_checkbox('sabnzbdenable', '1'); ?> />
   
   <?php echo form_label('Sabnzbd API Key', 'sabapikey', $attributes_label); ?>
   <?php echo form_input('sabapikey', ''); ?>
   
   <?php echo heading('XBMC', 4); ?>
   <!-- http://wiki.xbmc.org/index.php?title=JSON_RPC -->
   
   <?php echo form_label('Enable XBMC', 'enablexbmc', $attributes_label); ?>
   <input type="checkbox" name="xbmc" value="1" <?php echo set_checkbox('xbmcdenable', '1'); ?> />
   
   <?php echo form_label('XBMC IP Address', 'xbmcip'); ?>
   <?php echo form_input('xbmcip', ''); ?>
   
   <?php echo form_label('xbmcuser', 'xbmcuser', $attributes_label); ?>
   <?php echo form_input('xbmcuser', ''); ?>
   
   <?php echo form_label('xbmcpass', 'xbmcpass', $attributes_label); ?>
   <?php echo form_input('xbmcpass', ''); ?>
   
   <?php echo heading('Couchpotato', 4); ?>
   <!-- http://couchpotato.lighthouseapp.com/projects/56809/tickets/4-feature-request-api-functionality -->
   
   <?php echo form_label('Enable Couchpotato', 'enablecouchpotato', $attributes_label); ?>
   <input type="checkbox" name="couchpotato" value="1" <?php echo set_checkbox('couchpotato', '1'); ?> />
   
   <?php echo form_label('Couchpotato IP Address', 'cpip'); ?>
   <?php echo form_input('cpip', ''); ?>

   <?php echo form_reset('reset', 'Reset')?>
   <?php echo form_submit('mysubmit', 'Submit!');?>
<?php 
 /*
Filename: setup.php
*/
