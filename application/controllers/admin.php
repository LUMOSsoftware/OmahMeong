<?php
	class admin extends CI_Controller {
		function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
	}

		public function index(){
			$this->load->view('admin_view/login');
		}
		function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        

         //jika login sebagai admin
					$cek_admin=$this->Login_model->auth_admin($username,$password);
					if($cek_admin->num_rows() > 0){
							$data=$cek_admin->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['nim']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							redirect('admin_beranda');
					}else{  // jika username dan password tidak ditemukan atau salah
							
							echo $this->session->set_flashdata('msg','Username Atau Password Salah');
							redirect('/admin');
					}
        

    }
     function logout(){
        $this->session->sess_destroy();
        redirect('admin');
    }

 

}