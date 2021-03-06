<?php
	class admin_data_periksa extends CI_Controller {

		function __construct(){
		parent::__construct();		
		$this->load->model('Dataperiksa_model');

		}
		function index(){
		$data['title']="Transaksi Peminjaman";

        $data['tanggalpinjam']=date('Y-m-d');
        $data['tanggalkembali'] = strtotime('+7 day',strtotime($data['tanggalpinjam']));
        $data['noauto']=$this->Dataperiksa_model->nootomatis();
        $data['tbl_pasien']=$this->Dataperiksa_model->getPasien()->result();

		$data['tbl_periksa'] = $this->Dataperiksa_model->tampil_data()->result();
		$this->load->view('admin_view/pemeriksaan/index',$data);
	}
 
	function tambah_data(){
		$id_periksa = $this->input->post('id_periksa');
		$no_rm = $this->input->post('no_rm');
		$id_tindakan = $this->input->post('id_tindakan');
		$id_obat = $this->input->post('id_obat');
		$keluhan = $this->input->post('keluhan');
		$diagnosa = $this->input->post('diagnosa');
		$tgl_periksa = $this->input->post('tgl_periksa');
		$data = array(
			'id_periksa' => $id_periksa,
			'no_rm' => $no_rm,
			'id_tindakan' => $id_tindakan,
			'id_obat' => $id_obat,
			'keluhan' => $keluhan,
			'diagnosa' => $diagnosa,
			'tgl_periksa' => $tgl_periksa
			);
		$this->Dataperiksa_model->input_data($data,'tbl_periksa');
		redirect('admin_data_periksa');
	}

	    function cariPasien(){
        $no_rm=$this->input->post('no_rm');
        $tbl_pasien=$this->Dataperiksa_model->cariPasien($no_rm);
        if($tbl_pasien->num_rows()>0){
            $tbl_pasien=$tbl_pasien->row_array();
            echo $tbl_pasien['nama_pemilik'];
        }
    }

	function hapus($id_periksa){
		$where = array('id_periksa' => $id_periksa);
		$this->Dataperiksa_model->hapus_data($where,'tbl_periksa');
		redirect('admin_data_periksa');
	}

	function edit($id_periksa){
	$where = array('id_periksa' => $id_periksa);
	$data['tbl_periksa'] = $this->Dataperiksa_model->edit_data($where,'tbl_periksa')->result();
	$this->load->view('admin_view/v_editdatahewan',$data);
	}

	function update(){
	$id_periksa = $this->input->post('id_periksa');
		$no_rm = $this->input->post('no_rm');
		$id_tindakan = $this->input->post('id_tindakan');
		$id_obat = $this->input->post('id_obat');
		$keluhan = $this->input->post('keluhan');
		$diagnosa = $this->input->post('diagnosa');
		$tgl_periksa = $this->input->post('tgl_periksa');
		$data = array(
			'id_periksa' => $id_periksa,
			'no_rm' => $no_rm,
			'id_tindakan' => $id_tindakan,
			'id_obat' => $id_obat,
			'keluhan' => $keluhan,
			'diagnosa' => $diagnosa,
			'tgl_periksa' => $tgl_periksa
			);
 
	$where = array(
		'id_periksa' => $id_periksa
	);
 
	$this->Dataperiksa_model->update_data($where,$data,'tbl_periksa');
	redirect('admin_data_periksa/index');
}
 
 	function cari() {
       $data['tampil']=$this->Datapemilik_model->caridata();
       //jika data yang dicari tidak ada maka akan keluar informasi 
       //bahwa data yang dicari tidak ada
       if($data['tampil']==null) {
          print 'maaf data yang anda cari tidak ada atau keywordnya salah';
          print br(2);
          print anchor('admin_data_periksa','kembali');
          }
          else {
             $this->load->view('admin_view/dataperiksa',$data); 

			}
	}

	function pencarianbuku(){
        $cari=$this->input->post('caribuku');
        $data['tbl_obat']=$this->Dataperiksa_model->pencarianbuku($cari)->result();
        $this->load->view('admin_view/pemeriksaan/pencarianbuku',$data);
    }

     function tampil(){
        $data['tmp']=$this->Dataperiksa_model->tampilTmp()->result();
        $data['jumlahTmp']=$this->Dataperiksa_model->jumlahTmp();
        $this->load->view('admin_view/pemeriksaan/tampil',$data);
    }
}
?>