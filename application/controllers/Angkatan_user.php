<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angkatan_user extends CI_Controller {

	public function index()
	{
		$this->load->model('User_model');
		$data['Angkatan_user']=$this->User_model->getTampilAngkatan();
		$this->load->view('angkatan_user_view',$data);
	}


     public function detail_user($id)
    {
        $this->load->model('User_model');
        $tampil['dataAngkatan'] = $this->User_model->getdataAngkatan($id);
        $this->load->view('detail_user',$tampil);
        
    }
	
}
