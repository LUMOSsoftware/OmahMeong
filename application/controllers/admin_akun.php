<?php
	class admin_akun extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('Data_akun');

		}
			function index(){
		$data['tbl_admin'] = $this->Data_akun->tampil_data()->result();
		$this->load->view('admin_view/akun',$data);
	}
 
	function tambah_data(){
		$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'id_admin' => $id_admin,
			'username' => $username,
			'password' => $password,
			);
		$this->Data_akun->input_data($data,'tbl_admin');
		redirect('admin_akun');
	}

	function hapus($id_admin){
		$where = array('id_admin' => $id_admin);
		$this->Data_akun->hapus_data($where,'tbl_admin');
		redirect('admin_akun');
	}

	function edit($id_admin){
	$where = array('id_admin' => $id_admin);
	$data['tbl_admin'] = $this->Data_akun->edit_data($where,'tbl_admin')->result();
	$this->load->view('admin_view/v_editakun',$data);
	}

	function update(){
	$id_admin = $this->input->post('id_admin');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'id_admin' => $id_admin,
			'username' => $username,
			'password' => $password,
			);
 
	$where = array(
		'id_admin' => $id_admin
	);
 
	$this->Data_akun->update_data($where,$data,'tbl_admin');
	redirect('admin_akun');
}
 
 	function cari() {
       $data['tampil']=$this->Data_akun->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('admin_akun','kembali');
          }
          else {
             $this->load->view('admin_view/akun',$data); 

			}
	}
}
?>