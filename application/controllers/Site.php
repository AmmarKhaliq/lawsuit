<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Site extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
	}


	public function index()
	{
		// $this->load->model("Site_model");

		$seg1 = $this->uri->segment(1);
		$seg2 = $this->uri->segment(2);
		
		if(empty($seg1) || $seg1=="index"){
			if ( $this->session->has_userdata( 'userLogin' ) && $this->session->has_userdata( 'userEmail' ) && $this->session->has_userdata( 'userStatus' ) ) {
				redirect( base_url( "caseshome" ) );
			}else{
				$this->Site_model->login();	
			}
			
		}elseif($seg1!="" && method_exists($this->Site_model,$seg1)){
			$this->Site_model->{$seg1}();
		}else{
			$this->load->view('404');
		}
	}
	
}
