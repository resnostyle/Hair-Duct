<?php
/*
 * Include for the XBMC-PHP library
 * Used from: http://github.com/kaigoh/XBMC-PHP
 *  Using Alshain rendition as it has a few usage changes
 *  
 *  Used require because of some CI weird-ness, Im avoiding
 */

class xbmcphp {
		public function xbmc() {
			require APPPATH.'xbmc-php/xbmc_alshain.php';
		}
}