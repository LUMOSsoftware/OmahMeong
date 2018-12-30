<?php
	class admin_home extends CI_Controller {

function __construct(){
		parent::__construct();
		 if($this->session->userdata('masuk') != TRUE){
			redirect('/admin');	
			}	
		$this->load->model('Datapasien_model');
	}
 
	function index(){
		$data['tbl_pasien'] = $this->Datapasien_model->tampil_data()->result();
		$this->load->view('admin_view/laman',$data);
	}
 
	function tambah_data(){
		$nama_pemilik = $this->input->post('nama_pemilik');
		$alamat = $this->input->post('alamat');
		$no_tlp = $this->input->post('no_tlp');
		$nama_hewan = $this->input->post('nama_hewan');
		$umur_hewan = $this->input->post('umur_hewan');
		$ciri_spesifik = $this->input->post('ciri_spesifik');
		$jenis_hewan = $this->input->post('jenis_hewan');
		$jk_hewan = $this->input->post('jk_hewan');
		$tgldaftar = date("Y-m-d");
		$data = array(
			'nama_pemilik' => $nama_pemilik,
			'alamat' => $alamat,
			'no_tlp' => $no_tlp,
			'nama_hewan' => $nama_hewan,
			'umur_hewan' => $umur_hewan,
			'ciri_spesifik' => $ciri_spesifik,
			'jenis_hewan' => $jenis_hewan,
			'jk_hewan' => $jk_hewan,
			'tgl_daftar' => $tgldaftar
			);
		$this->Datapasien_model->input_data($data,'tbl_pasien');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin_home');


	}

	function hapus($no_rm){
		$where = array('no_rm' => $no_rm);
		$this->Datapemilik_model->hapus_data($where,'tbl_pasien');
		redirect('admin_home');
	}

	function edit($id_pemilik){
	$where = array('id_pemilik' => $id_pemilik);
	$data['tbl_pemilik'] = $this->Datapemilik_model->edit_data($where,'tbl_pemilik')->result();
	$this->load->view('admin_view/v_editdatapemilik',$data);
	}

	function update(){
	$id_pemilik = $this->input->post('id_pemilik');
	$nama_pemilik = $this->input->post('nama_pemilik');
	$alamat = $this->input->post('alamat');
	$no_hp = $this->input->post('no_hp');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
 
	$data = array(
		'nama_pemilik' => $nama_pemilik,
		'alamat' => $alamat,
		'no_hp' => $no_hp,
		'username' => $username,
		'password' => $password,
	);
 
	$where = array(
		'id_pemilik' => $id_pemilik
	);
 
	$this->Datapemilik_model->update_data($where,$data,'tbl_pemilik');
	redirect('admin_home/index');
	}
 
 	function cari() {
       $data['tampil']=$this->Datapemilik_model->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('admin_home','kembali');
          }
          else {
             $this->load->view('admin_view/laman',$data); 

			}
	}
}
?>