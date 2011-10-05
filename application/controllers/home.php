<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
 /*@todo check for an file the indicates the widgets name and features for inclusin
  * @todo do intial check of database file existing if the file doesnt exist redirect to "/setup"
  */
class Home extends CI_Controller {

	public function Home() {
		parent::__construct();
		//$this->output->enable_profiler(TRUE);
		$xml = simplexml_load_file($this->config->item('xml'));
		
	}
	
	public function index()		{
//@todo add some logic checking db for if this active
		$this->load->library('xbmcphp');
		
		
			
	/*	$xbmcJson->NAMESPACE->COMMAND(
            array(PARAM1 => VALUE1, PARAM2 => VALUE2,)
        );
        $xbmcJson->VideoLibrary->GetRecentlyAddedMovies();
		
		*/	
		
		
		//loaded up template 
		$data['main_content'] = 'home';
        $this->load->view('template/main', $data);
		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */