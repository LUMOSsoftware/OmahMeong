<?php
	class admin_beranda extends CI_Controller {

function __construct(){
		parent::__construct();
		 if($this->session->userdata('masuk') != TRUE){
			redirect('/admin');	
			}	
	}
 
	function index(){
		$this->load->view('admin_view/beranda');
	}
}
?>