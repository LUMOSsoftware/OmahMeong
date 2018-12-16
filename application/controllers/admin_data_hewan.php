<?php
	class admin_data_hewan extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('Datahewan_model');

		}
			function index(){
		$data['tbl_hewan'] = $this->Datahewan_model->tampil_data()->result();
		$this->load->view('admin_view/datahewan',$data);
	}
 
	function tambah_data(){
		$id_hewan = $this->input->post('id_hewan');
		$id_pemilik = $this->input->post('id_pemilik');
		$nama_hewan = $this->input->post('nama_hewan');
		$jenis_hewan = $this->input->post('jenis_hewan');
		$jenis_kelamin_hewan = $this->input->post('jenis_kelamin_hewan');
		$umur_hewan = $this->input->post('umur_hewan');
		$ciri_spesifik = $this->input->post('ciri_spesifik');
		$data = array(
			'id_hewan' => $id_hewan,
			'id_pemilik' => $id_pemilik,
			'nama_hewan' => $nama_hewan,
			'jenis_hewan' => $jenis_hewan,
			'jenis_kelamin_hewan' => $jenis_kelamin_hewan,
			'umur_hewan' => $umur_hewan,
			'ciri_spesifik' => $ciri_spesifik
			);
		$this->Datahewan_model->input_data($data,'tbl_hewan');
		redirect('admin_data_hewan');
	}

	function hapus($id_hewan){
		$where = array('id_hewan' => $id_hewan);
		$this->Datahewan_model->hapus_data($where,'tbl_hewan');
		redirect('admin_data_hewan');
	}

	function edit($id_hewan){
	$where = array('id_hewan' => $id_hewan);
	$data['tbl_hewan'] = $this->Datahewan_model->edit_data($where,'tbl_hewan')->result();
	$this->load->view('admin_view/v_editdatahewan',$data);
	}

	function update(){
	$id_hewan = $this->input->post('id_hewan');
	$id_pemilik = $this->input->post('id_pemilik');
	$nama_hewan = $this->input->post('nama_hewan');
	$jenis_hewan = $this->input->post('jenis_hewan');
	$jenis_kelamin_hewan = $this->input->post('jenis_kelamin_hewan');
	$umur_hewan = $this->input->post('umur_hewan');
	$ciri_spesifik = $this->input->post('ciri_spesifik');
 
	$data = array(
		'id_pemilik' => $id_pemilik,
		'nama_hewan' => $nama_hewan,
		'jenis_hewan' => $jenis_hewan,
		'jenis_kelamin_hewan' => $jenis_kelamin_hewan,
		'umur_hewan' => $umur_hewan,
		'ciri_spesifik' => $ciri_spesifik,
	);
 
	$where = array(
		'id_hewan' => $id_hewan
	);
 
	$this->Datahewan_model->update_data($where,$data,'tbl_hewan');
	redirect('admin_data_hewan/index');
}
 
 	function cari() {
       $data['tampil']=$this->Datapemilik_model->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('admin_data_hewan','kembali');
          }
          else {
             $this->load->view('admin_view/datahewan',$data); 

			}
	}
}
?>