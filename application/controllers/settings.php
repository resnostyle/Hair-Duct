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
 
     class Settings extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
	
		
		$data['main_content'] = 'settings';
        $this->load->view('template/main', $data);
	}
	
 }
  /*
 Filename: settings.php
 */