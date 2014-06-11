<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Facebook_login extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
	function index() {
		
		$data['page_title'] = "Sumbong Mo Kay Mayor";
		
		$site_url = site_url();
		$breadcrumb_link = "<p><a href='{$site_url}'>Home</a> &raquo; Sumbong Kay Mayor</p>";
		
		$data['breadcrumbs'] = "
			<div id='breadcrumbs' class='grid_12'>
				{$breadcrumb_link}
			</div>
		";
		
		$data['main_content'] = "sumbong_kay_mayor";
		$this->load->view('template/content', $data);
	
	}
	
}