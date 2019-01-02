<?php
	class admin_obat extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('Dataobat_model');

		}
			function index(){
		$data['tbl_obat'] = $this->Dataobat_model->tampil_data()->result();
		$this->load->view('admin_view/obat',$data);
	}
 
	function tambah_data(){
		$id_obat = $this->input->post('id_obat');
		$nama_obat = $this->input->post('nama_obat');
		$harga_obat = $this->input->post('harga_obat');
		$data = array(
			'id_obat' => $id_obat,
			'nama_obat' => $nama_obat,
			'harga_obat' => $harga_obat,
			);
		$this->Dataobat_model->input_data($data,'tbl_obat');
		redirect('admin_obat');
	}

	function hapus($id_obat){
		$where = array('id_obat' => $id_obat);
		$this->Dataobat_model->hapus_data($where,'tbl_obat');
		redirect('admin_obat');
	}

	function edit($id_obat){
	$where = array('id_obat' => $id_obat);
	$data['tbl_obat'] = $this->Dataobat_model->edit_data($where,'tbl_obat')->result();
	$this->load->view('admin_view/v_editdataobat',$data);
	}

	function update(){
	$id_obat = $this->input->post('id_obat');
	$nama_obat = $this->input->post('nama_obat');
	$harga_obat = $this->input->post('harga_obat');
	$data = array(
		'nama_obat' => $nama_obat,
		'harga_obat' => $harga_obat,
	);
 
	$where = array(
		'id_obat' => $id_obat
	);
 
	$this->Dataobat_model->update_data($where,$data,'tbl_obat');
	redirect('admin_obat');
}
 
 	function cari() {
       $data['tampil']=$this->Dataobat_model->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('admin_obat','kembali');
          }
          else {
             $this->load->view('admin_view/obat',$data); 

			}
	}
}
?>