<?php
	class admin_obat extends CI_Controller {

		function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') != TRUE){
			redirect('/admin');	
			}			
		$this->load->model('Dataobat_model');
		}
			function index(){
		$data['barang'] = $this->Dataobat_model->tampil_data()->result();
		$this->load->view('admin_view/obat',$data);
	}
 
	function tambah_data(){
		$barang_id = $this->input->post('barang_id');
		$kategori_id = $this->input->post('kategori_id');
		$nama_barang = $this->input->post('nama_barang');
		$harga = $this->input->post('harga');
		$data = array(
			'barang_id' => $barang_id,
			'nama_barang' => $nama_barang,
			'harga' => $harga
			);

		$this->Dataobat_model->input_data($data,'barang');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin_obat');
	}

	function hapus($id_obat){
		$where = array('id_obat' => $id_obat);
		$this->Dataobat_model->hapus_data($where,'tbl_obat');
		redirect('admin_obat');
	}

	function edit($barang_id){
	$where = array('barang_id' => $barang_id);
	$data['barang'] = $this->Dataobat_model->edit_data($where,'barang')->result();
	$this->load->view('admin_view/v_editdataobat',$data);
	}

	function update(){
	$barang_id = $this->input->post('barang_id');
	$kategori_id = $this->input->post('kategori_id');
	$nama_obat = $this->input->post('nama_barang');
	$harga_obat = $this->input->post('harga');
	$data = array(
		'kategori_id' => $kategori_id,
		'nama_barang' => $nama_barang,
		'harga' => $harga
	);
 
	$where = array(
		'barang_id' => $barang_id
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