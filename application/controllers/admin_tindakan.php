<?php
	class admin_tindakan extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('Datatindakan_model');

		}
			function index(){
		$data['tbl_tindakan'] = $this->Datatindakan_model->tampil_data()->result();
		$this->load->view('admin_view/tindakan',$data);
	}
 
	function tambah_data(){
		$id_tindakan = $this->input->post('id_tindakan');
		$nama_tindakan = $this->input->post('nama_tindakan');
		$harga = $this->input->post('harga');
		$keterangan = $this->input->post('keterangan');
		$data = array(
			'id_tindakan' => $id_tindakan,
			'nama_tindakan' => $nama_tindakan,
			'harga' => $harga,
			'keterangan' => $keterangan,
			);
		$this->Datatindakan_model->input_data($data,'tbl_tindakan');
		redirect('admin_tindakan');
	}

	function hapus($id_tindakan){
		$where = array('id_tindakan' => $id_tindakan);
		$this->Datatindakan_model->hapus_data($where,'tbl_tindakan');
		redirect('admin_tindakan');
	}

	function edit($id_tindakan){
	$where = array('id_tindakan' => $id_tindakan);
	$data['tbl_tindakan'] = $this->Datatindakan_model->edit_data($where,'tbl_tindakan')->result();
	$this->load->view('admin_view/v_editdatatindakan',$data);
	}

	function update(){
	$id_tindakan = $this->input->post('id_tindakan');
	$nama_tindakan = $this->input->post('nama_tindakan');
	$harga = $this->input->post('harga');
	$keterangan = $this->input->post('keterangan'); 
	$data = array(
		'nama_tindakan' => $nama_tindakan,
		'harga' => $harga,
		'keterangan' => $keterangan,

	);
 
	$where = array(
		'id_tindakan' => $id_tindakan
	);
 
	$this->Datatindakan_model->update_data($where,$data,'tbl_tindakan');
	redirect('admin_tindakan');
}
 
 	function cari() {
       $data['tampil']=$this->Datatindakan_model->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('admin_tindakan','kembali');
          }
          else {
             $this->load->view('admin_view/tindakan',$data); 

			}
	}
}
?>