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

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{

		$this->load->library('xmlrpc');
		$this->load->library('xmlrpcs'); 
/*@todo 		
do intial check of database file existing
	if the file doesnt exist redirect to "/setup"
*/	

		$this->load->library('xbmc-php');
		
		$this->load->helper('url');
		$server_url = 'http://192.168.2.12';

		//$this->load->library('xmlrpc');

		$this->xmlrpc->server($server_url, 8080);
		$this->xmlrpc->method('Greetings');

		$request = array('How is it going?');
		$this->xmlrpc->request($request);
		
		
		$this->xmlrpc->server('http://192.168.2.12', 8080);
		//$request = array(array('JSONRPC', 'string'), 'http://192.168.2.12:8080');
		$this->xmlrpc->method(jsonrpc);
		$this->xmlrpc->set_debug(TRUE);
		$this->xmlrpc->request($request);
		
		
		$this->xmlrpc->send_request();
		$this->xmlrpc->display_response();
		
		$data['main_content'] = 'home';
        $this->load->view('template/main', $data);
		
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */