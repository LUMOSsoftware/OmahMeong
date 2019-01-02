<?php
	class admin_data_pasien extends CI_Controller {

function __construct(){
		parent::__construct();
		 if($this->session->userdata('masuk') != TRUE){
			redirect('/admin');	
			}	
		$this->load->model('Datapasien_model');
		$this->load->library('pdf');
	}
 
	function index(){
		$data['tbl_pasien'] = $this->Datapasien_model->tampil_data()->result();
		$this->load->view('admin_view/data_pasien',$data);
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
		$this->Datapemilik_model->input_data($data,'tbl_pasien');
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin_home');
	}

	function hapus($no_rm){
		$where = array('no_rm' => $no_rm);
		$this->Datapasien_model->hapus_data($where,'tbl_pasien');
		$this->session->set_flashdata('notif','<div class="alert alert-danger" role="alert"> Data Berhasil dihapus <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin_data_pasien');
	}

	function cetak() { 
		$pdf = new FPDF('l','mm','A5');
        // membuat halaman baru

        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'KARTU PASIEN',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','',12);
        $mahasiswa = $this->db->get('tbl_pasien')->result();
        foreach ($mahasiswa as $row){
        	$pdf->Image("assets/user/img/logo.png",65,17,86,16);
        	$pdf->Cell(30,6,'',0,1);
            $pdf->Cell(30,6,'',0,1);
            $pdf->Cell(190,7,'Jl. Manggis Raya No. 46 Jember',0,1,'C');
            $pdf->Cell(190,7,'Telp. 0822 3348 1073',0,1,'C');
            $pdf->Cell(30,6,'',0,1);
            $pdf->Cell(30,6,'',0,1);
            $pdf->Line(30, 17, 30, 17);

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,6,'No Reg',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(150,6,$row->no_rm,0,1);

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,6,'Nama Pemilik',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(150,6,$row->nama_pemilik,0,1);

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,6,'Alamat',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(27,6,$row->alamat,0,1);

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,6,'No. Telp.',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(25,6,$row->no_tlp,0,1);

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,6,'Nama Hewan',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(25,6,$row->nama_hewan,0,1); 

            $pdf->SetFont('Arial','B',12);
			$pdf->Cell(40,6,'Umur Hewan',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(25,6,$row->umur_hewan,0,1); 

            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(40,6,'Warna/ Ciri Spesifik',0,0);
            $pdf->Cell(10,6,':',0,0,"C");
            $pdf->SetFont('Arial','',12);
            $pdf->Cell(25,6,$row->ciri_spesifik,0,1);             
        }
        $pdf->Output();
	}

	function edit($no_rm){
	$where = array('no_rm' => $no_rm);
	$data['tbl_pasien'] = $this->Datapasien_model->edit_data($where,'tbl_pasien')->result();
	$this->load->view('admin_view/v_editdatapasien',$data);
	}

	function update(){
		$nama_pemilik = $this->input->post('nama_pemilik');
		$alamat = $this->input->post('alamat');
		$no_tlp = $this->input->post('no_tlp');
		$nama_hewan = $this->input->post('nama_hewan');
		$umur_hewan = $this->input->post('umur_hewan');
		$ciri_spesifik = $this->input->post('ciri_spesifik');
		$jenis_hewan = $this->input->post('jenis_hewan');
		$jk_hewan = $this->input->post('jk_hewan');
		$data = array(
			'nama_pemilik' => $nama_pemilik,
			'alamat' => $alamat,
			'no_tlp' => $no_tlp,
			'nama_hewan' => $nama_hewan,
			'umur_hewan' => $umur_hewan,
			'ciri_spesifik' => $ciri_spesifik,
			'jenis_hewan' => $jenis_hewan,
			'jk_hewan' => $jk_hewan
			);
 
	$where = array(
		'no_rm' => $no_rm
	);
 
	$this->Datapasien_model->update_data($where,$data,'tbl_pasien');
	redirect('admin_data_pasien');
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