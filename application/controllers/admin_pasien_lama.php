<?php
	class admin_pasien_lama extends CI_Controller {

function __construct(){
		parent::__construct();		
		$this->load->model('Datapasienlama_model');
		
	}
 
	function index(){
		$this->load->view('admin_view/pasienlama');
	}

 public function search(){
    // Ambil data NIS yang dikirim via ajax post
    $no_rm = $this->input->post('no_rm');
    
    $pasienlama = $this->Datapasienlama_model->viewByNorm($no_rm);
    
    if( ! empty($pasienlama)){ // Jika data siswa ada/ditemukan
      // Buat sebuah array
      $callback = array(
        'status' => 'success', // Set array status dengan success
        'nama_pemilik' => $pasienlama->nama_pemilik, // Set array nama dengan isi kolom nama pada tabel siswa
        'jnama_hewan' => $pasienlama->nama_hewan, // Set array jenis_kelamin dengan isi kolom jenis_kelamin pada tabel siswa
      );
    }else{
      $callback = array('status' => 'failed'); // set array status dengan failed
    }
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

/*
	function tambah_data(){
		$no_rm = $this->input->post('no_rm');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$nama_hewan = $this->input->post('nama_hewan');
		$tgl_daftar = date("Y-m-d");
		$data = array(
			'no_rm' => $no_rm,
			'nama_pemilik' => $nama_pemilik,
			'nama_hewan' => $nama_hewan,
			'tgl_daftar' => $tgl_daftar
			);
		$this->Datapemilik_model->input_data($data,'tbl_pendaftaran');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin_pasien_lama');


	}

*/
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