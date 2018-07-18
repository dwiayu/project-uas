<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi_user extends CI_Controller {

	public function index()
	{
		$this->load->model('Admin_model');
		$data['Divisi_user']=$this->Admin_model->getTampilDivisi();
		$this->load->view('divisi_user_view',$data);
	}
	
}
