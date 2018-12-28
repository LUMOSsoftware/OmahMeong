<?php
class admin_data_pasien extends CI_Controller{
		function __construct(){
		parent::__construct();		
		$this->load->model('datapasien_model2');

		}
		
		function index(){
		$data['tbl_hewan'] = $this->datapasien_model2->tampil_data()->result();
		$this->load->view('admin_view/datapasien',$data);
	}
}
?>