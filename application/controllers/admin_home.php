<?php
	class admin_home extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->load->model('Datapemilik_model');
		
 
	}
 
	function index(){
		$data['tbl_pemilik'] = $this->Datapemilik_model->tampil_data()->result();
		$this->load->view('admin_view/laman',$data);
	}
 
	function tambah_data(){
		$id_pemilik = $this->input->post('id_pemilik');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array(
			'id_pemilik' => $id_pemilik,
			'nama_pemilik' => $nama_pemilik,
			'alamat' => $alamat,
			'no_hp' => $no_hp,
			'username' => $username,
			'password' => $password
			);
		$this->Datapemilik_model->input_data($data,'tbl_pemilik');
		redirect('admin_home');
	}

	function hapus($id_pemilik){
		$where = array('id_pemilik' => $id_pemilik);
		$this->Datapemilik_model->hapus_data($where,'tbl_pemilik');
		redirect('admin_home');
	}

	function search(){
       $data['tampil']=$this->Datapemilik_model->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('welcome','kembali');
          }
          else {
             $this->load->view('admin_view/laman',$data); 

			}
	}
 
}
?>