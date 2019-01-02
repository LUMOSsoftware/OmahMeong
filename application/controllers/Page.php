<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			redirect('/admin');
		}
  }

  function index(){
    $this->load->view('admin_view/beranda');
  } 
}
