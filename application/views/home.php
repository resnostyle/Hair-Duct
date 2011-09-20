<!-- 
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
-->
    
   
            <div id="tab-1" class="tab-content show">

                <input id="session" name="session" value="abcdefghijklmnop" type="hidden">
                <div id="config-components">

                  <div id="core-component-group1" class="component-group clearfix">
                    <div class="component-group-desc">
                      <h3>SABnzbd Web Server</h3>
                      <p><b>Changes will require a SABnzbd restart!</b></p>
                    </div>
                    <fieldset class="component-group-list">
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="host">
                          <span class="component-title">SABnzbd Host</span>
                          <input name="host" id="host" value="localhost" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Host SABnzbd should listen on.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="port">
                          <span class="component-title">SABnzbd Port</span>
                          <input name="port" id="port" size="8" value="8081" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Port SABnzbd should listen on.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="username">
                          <span class="component-title">SABnzbd Username</span>
                          <input name="username" id="username" value="username" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Optional authentication username.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="password">
                          <span class="component-title">SABnzbd Password</span>
                          <input name="password" id="password" value="******" type="password">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Optional authentication password.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="web_dir">
                          <span class="component-title">Web Interface</span>
                          <select name="web_dir" id="web_dir">
                          
                            <option value="Plush - gold">Plush - gold</option>
                          
                            <option value="Classic - black">Classic - black</option>
                          
                            <option value="Classic - classic">Classic - classic</option>
                          
                            <option value="Classic - darkblue">Classic - darkblue</option>
                          
                            <option value="Classic - green">Classic - green</option>
                          
                            <option value="Classic - lightblue">Classic - lightblue</option>
                          
                            <option value="Classic - red">Classic - red</option>
                          
                            <option value="Classic - white-black">Classic - white-black</option>
                          
                            <option value="smpl - black">smpl - black</option>
                          
                            <option value="smpl - white" selected="selected">smpl - white</option>
                          
                          </select>
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Choose a skin.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="web_dir2">
                          <span class="component-title">Secondary Web Interface</span>
                          <select name="web_dir2" id="web_dir2">
                          
                            <option value="None">None</option>
                       
                          </select>
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Activate an alternative skin.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="language">
                          <span class="component-title">Language</span>
                          <select name="language" id="language" class="select">
                            
                              <option value="da">Dansk</option>

                              <option value="de">Deutsch</option>

                              <option value="en" selected="selected">English</option>
                            
                              <option value="fr">Fran�ais</option>

                              <option value="nl">Nederlands</option>

                              <option value="nb">Norsk bokm�l</option>

                              <option value="ro">Rom�na</option>

                              <option value="sv">Svenska</option>

                          </select>
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Select a web interface language.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="apikey">
                          <span class="component-title">API Key</span>
                          <input id="apikey" value="abcdefghijklmnopqrstuv" class="apikey" type="text">
                          <input aria-disabled="false" role="button" class="juiButton ui-button ui-widget ui-state-default ui-corner-all" value="Generate New Key" id="generate_new_apikey" rel="Are you sure?" type="button">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">This key will give 3rd party programs full access to SABnzbd.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="nzbkey">
                          <span class="component-title">NZB Key</span>
                          <input id="nzbkey" value="abcdefghijklmnopqrstuv" class="apikey" type="text">
                          <input aria-disabled="false" role="button" class="juiButton ui-button ui-widget ui-state-default ui-corner-all" value="Generate New Key" id="generate_new_nzbkey" rel="Are you sure?" type="button">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">This key will allow 3rd party programs to add NZBs to SABnzbd.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="clearfix" for="disable_api_key">
                          <input name="disable_api_key" id="disable_api_key" value="1" type="checkbox">
                          <span class="component-title">Disable API-key</span>
                          <span class="component-desc">Do not require the API key.</span>
                        </label>
                      </div>
                    </fieldset>
                  </div><!-- /component-group1 -->

                  <div id="core-component-group2" class="component-group clearfix">
                    <div class="component-group-desc">
                      <h3>HTTPS Support</h3>
                      <p><b>Changes will require a SABnzbd restart!</b></p>
                    </div>
                    <fieldset class="component-group-list">
                      <div class="field-pair">
                        <label class="clearfix" for="enable_https">
                          <input name="enable_https" id="enable_https" value="1" type="checkbox">
                          <span class="component-title">Enable HTTPS</span>
                          <span class="component-desc">Enable accessing the interface from a HTTPS address.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="https_port">
                          <span class="component-title">HTTPS Port</span>
                          <input name="https_port" id="https_port" size="8" value="9090" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">If empty, the standard port will only listen to HTTPS.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="https_cert">
                          <span class="component-title">HTTPS Certificate</span>
                          <input name="https_cert" id="https_cert" value="server.cert" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">File name or path to HTTPS Certificate.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="https_key">
                          <span class="component-title">HTTPS Key</span>
                          <input name="https_key" id="https_key" value="server.key" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">File name or path to HTTPS Key.</span>
                        </label>
                      </div>
                    </fieldset>
                  </div><!-- /component-group2 -->

                  <div id="core-component-group3" class="component-group clearfix">
                    <div class="component-group-desc">
                      <h3>Tuning</h3>
                    </div>
                    <fieldset class="component-group-list">
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="bandwidth_limit">
                          <span class="component-title">Download Speed Limit</span>
                          <input name="bandwidth_limit" id="bandwidth_limit" value="0" size="8" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Download rate limit (in KB/s - kilobytes per second).</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="cache_limit">
                          <span class="component-title">Article Cache Limit</span>
                          <input name="cache_limit" id="cache_limit" value="128M" size="8" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Cache articles in memory to reduce disk access.<br><i>In bytes, optionally follow with K,M,G. For example: "64M" or "128M"</i></span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="cleanup_list">
                          <span class="component-title">Cleanup List</span>
                          <input name="cleanup_list" id="cleanup_list" value="" size="40" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">List of file extensions that should be deleted after download.<br>For example: <b>.nfo</b> or <b>.nfo, .sfv</b></span>
                        </label>
                      </div>
                    </fieldset>
                  </div><!-- /component-group3 -->

                  <div class="component-group-last clearfix">
                    <div class="component-group-desc">
                      <h3>&nbsp;</h3>
                    </div>
                    <fieldset class="component-group-list">
                        <input type="button" class="setting element button" value="Save Changes">
                        <input type="button" class="setting element button" value="Restart SABnzbd">
                    </fieldset>
                  </div><!-- /component-group -->

                </div><!-- /config-components -->


            </div>
            <div id="tab-2" class="tab-content">


                <input name="session" id="session" value="3dd7e1b2db55b47f5a3b5709aa9b268a" type="hidden">

                <div id="config-components">

                  <div id="core-component-group1" class="component-group clearfix">
                    <div class="component-group-desc">
                      <h3>User Folders</h3>
                      <p><small>Default Base Folder:<br>C:\Users\zoggy\Documents</small></p>
                      <p><em>NOTE:</em> Folders will be created automatically when Saving. You may use absolute paths to save outside of the default folders.</p>
                    </div>
                    <fieldset class="component-group-list">
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="download_dir">
                          <span class="component-title">Temporary Download Folder</span>
                          <input size="50" name="download_dir" id="download_dir" value="downloads/incomplete" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Location to store unprocessed downloads.<br><i>Can only be changed when queue is empty.</i></span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="download_free">
                          <span class="component-title">Minimum Free Space for Temporary Download Folder</span>
                          <input size="8" name="download_free" id="download_free" value="" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Auto-pause when free space is beneath this value.<br><i>In bytes, optionally follow with K,M,G,T. For example: "800M" or "8G"</i></span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="complete_dir">
                          <span class="component-title">Completed Download Folder</span>
                          <input size="50" name="complete_dir" id="complete_dir" value="downloads/complete" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Location to store finished, fully processed downloads.<br><i>Can be overruled by user-defined categories.</i></span>
                        </label>
                      </div>
                      
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="dirscan_dir">
                          <span class="component-title">Watched Folder</span>
                          <input size="50" name="dirscan_dir" id="dirscan_dir" value="" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Folder to monitor for .nzb files.<br><i>Also scans .zip .rar and .tar.gz archives for .nzb files.</i></span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="dirscan_speed">
                          <span class="component-title">Watched Folder Scan Speed</span>
                          <input size="8" name="dirscan_speed" id="dirscan_speed" value="5" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Number of seconds between scans for .nzb files.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="script_dir">
                          <span class="component-title">Post-Processing Scripts Folder</span>
                          <input size="50" name="script_dir" id="script_dir" value="C:\Program Files (x86)\SickBeard\autoProcessTV" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Folder containing user scripts for post-processing.</span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="email_dir">
                          <span class="component-title">Email Templates Folder</span>
                          <input size="50" name="email_dir" id="email_dir" value="" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Folder containing user-defined email templates.</span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="password_file">
                          <span class="component-title">Password file</span>
                          <input size="50" name="password_file" id="password_file" value="" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">File containing all passwords to be tried on encrypted RAR files.</span>
                        </label>
                      </div>
                    </fieldset>
                  </div><!-- /component-group1 -->

                  <div id="core-component-group2" class="component-group clearfix">
                    <div class="component-group-desc">
                      <h3>System Folders</h3>
                      <p><small>Default Base Folder:<br>C:\Users\zoggy\AppData\Local\sabnzbd</small></p>
                    </div>
                    <fieldset class="component-group-list">
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="admin_dir">
                          <span class="component-title">Administrative Folder</span>
                          <input size="50" name="admin_dir" id="admin_dir" value="admin" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Location for queue admin and history database.<br><i>Can only be changed when queue is empty.</i></span>
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc"><i>Data will <b>not</b> be moved. Requires SABnzbd restart!</i></span>
                        </label>
                      </div>
                      <div class="field-pair alt">
                        <label class="nocheck clearfix" for="log_dir">
                          <span class="component-title">Log Folder</span>
                          <input size="50" name="log_dir" id="log_dir" value="logs" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Location of log files for SABnzbd.<br><i>Requires SABnzbd restart!</i></span>
                        </label>
                      </div>
                      <div class="field-pair">
                        <label class="nocheck clearfix" for="nzb_backup_dir">
                          <span class="component-title">.nzb Backup Folder</span>
                          <input size="50" name="nzb_backup_dir" id="nzb_backup_dir" value="D:\Sickbeard_NZB" type="text">
                        </label>
                        <label class="nocheck clearfix">
                          <span class="component-title">&nbsp;</span>
                          <span class="component-desc">Location where .nzb files will be stored.</span>
                        </label>
                      </div>
                    </fieldset>
                  </div><!-- /component-group2 -->

                  <div class="component-group-last clearfix">
                    <div class="component-group-desc">
                      <h3>&nbsp;</h3>
                    </div>
                    <fieldset class="component-group-list">
                      <div class="left_links">
                        <a id="save"><span class="config_sprite_container sprite_config_save">&nbsp;</span> Save Changes</a>
                      </div>
                    </fieldset>
                  </div><!-- /component-group -->

                </div><!-- /config-components -->


            </div>
            <div id="tab-3" class="tab-content">

            </div>
            <div id="tab-4" class="tab-content">

            </div>
            <div id="tab-8" class="tab-content">
                <h2>Blah</h2>
                <table class="setting group">
                    <tr>
                        <td class="setting group-name">General</td>
                        <td class="setting group-content">
                            <div class="setting bundle popup-button">
                                <div class="setting container popup-button">
                                    <label class="setting label popup-button">Refresh Rate:</label>
                                        <select class="setting element popup-button" style="margin-left: 39px; ">
                                            <option value="0">Disabled</option>
                                            <option value="10">10 seconds</option>
                                            <option value="15">15 seconds</option>
                                            <option value="30">30 seconds</option>
                                            <option value="60">1 minute</option>
                                            <option value="120">2 minutes</option>
                                            <option value="300">5 minutes</option>
                                            <option value="900">15 minutes</option>
                                            <option value="1800">30 minutes</option>
                                            <option value="3600">1 hour</option>
                                            <option value="7200">2 hours</option>
                                            <option value="14400">4 hours</option>
                                        </select>
                                </div>
                            </div>
                            <div class="setting bundle popup-button">
                                <div class="setting container popup-button">
                                    <label class="setting label popup-button">Notification Timeout:</label>
                                        <select class="setting element popup-button">
                                            <option value="0">Disabled</option>
                                            <option value="10">10 seconds</option>
                                            <option value="15">15 seconds</option>
                                            <option value="20">20 seconds</option>
                                            <option value="30">30 seconds</option>
                                            <option value="45">45 seconds</option>
                                            <option value="60">1 minute</option>
                                            <option value="120">2 minutes</option>
                                            <option value="300">5 minutes</option>
                                            <option value="1800">30 minutes</option>
                                            <option value="3600">1 hour</option>
                                        </select>
                                </div>
                            </div>
                            <div class="setting bundle popup-button">
                                <div class="setting container popup-button">
                                    <label class="setting label popup-button">Badge Count:</label>
                                        <select class="setting element popup-button" style="margin-left: 39px; ">
                                            <option value="missed">Missed</option>
                                            <option value="today">Today</option>
                                            <option value="soon">Soon</option>
                                            <option value="later">Later</option>
                                        </select>
                                </div>
                            </div>
                            <div class="setting bundle popup-button">
                                <div class="setting container popup-button">
                                    <label class="setting label popup-button">Active Tab:</label>
                                        <select class="setting element popup-button" style="margin-left: 54px; ">
                                            <option value="auto">Remember</option>
                                            <option value="missed">Missed</option>
                                            <option value="today">Today</option>
                                            <option value="soon">Soon</option>
                                            <option value="later">Later</option>
                                        </select>
                                </div>
                            </div>
                            <div class="setting bundle checkbox">
                                <div class="setting container checkbox">
                                    <input id="grhlbc9l" class="setting element checkbox" type="checkbox" value="true"><label class="setting label checkbox" for="grhlbc9l">Enable Context Menu</label>
                                </div>
                            </div>
                            <div class="setting bundle checkbox">
                                <div class="setting container checkbox">
                                    <input id="grhlbc9n" class="setting element checkbox" type="checkbox" value="true"><label class="setting label checkbox" for="grhlbc9n">Enable Notifications</label>
                                </div>
                            </div>
                            <div class="setting bundle checkbox">
                                <div class="setting container checkbox">
                                    <input id="grhlbc9p" class="setting element checkbox" type="checkbox" value="true"><label class="setting label checkbox" for="grhlbc9p">Enable Automatic Authentication (insecure)</label>
                                </div>
                            </div>
                            <div class="setting bundle button">
                                <div class="setting container button">
                                    <label class="setting label button">Click to reset all settings to default:</label><input class="setting element button" type="button" value="Reset">
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <table class="setting group">
                    <tr>
                        <td class="setting group-name">External Images</td>
                        <td class="setting group-content">
                            <div class="setting bundle checkbox">
                                <div class="setting container checkbox">
                                    <input id="grhrf1wk" class="setting element checkbox" type="checkbox" value="true"><label class="setting label checkbox" for="grhrf1wk">Provider icon</label>
                                </div>
                            </div>
                            <div class="setting bundle checkbox">
                                <div class="setting container checkbox">
                                    <input id="grhrf1wm" class="setting element checkbox" type="checkbox" value="true"><label class="setting label checkbox" for="grhrf1wm">Single Show</label>
                                </div>
                            </div>
                            <div class="setting bundle checkbox">
                                <div class="setting container checkbox">
                                    <input id="grhrf1wo" class="setting element checkbox" type="checkbox" value="true"><label class="setting label checkbox" for="grhrf1wo">Showlist</label>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>



 /*
Filename: home.php
*/