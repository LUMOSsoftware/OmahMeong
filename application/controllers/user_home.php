<?php
class user_home extends CI_Controller {
	public function index()
	{
		$this->load->view('user_view/beranda');
	}
}
