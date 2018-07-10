<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Divisi extends CI_Controller {

	public function index()
	{
		$this->load->model('Admin_model');
		$data['Divisi']=$this->Admin_model->getTampilDivisi();
		$this->load->view('divisi',$data);
	}
	
}
