<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {


    public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in')){
			$session_data=$this->session->userdata("logged_in");
			$data['username']=$session_data['username'];
			$data['level']=$session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if(! $this->acl->is_public($current_controller)){
				if(! $this->acl->is_allowed($current_controller, $data['level'])){
					redirect('login/logout','refresh');
				}
            }
            $this->load->model('Pendaftaran_model');
		}else{
			redirect('login','refresh');
		}
	}
    
	public function index(){
        
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'nim', 'trim|required');
        $this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
        $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
        $this->form_validation->set_rules('alamat', 'tempat', 'trim|required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('pendaftaran_view');
		}else{
			$config['upload_path']  = './assets/uploads/';
            $config['allowed_types']    ='gif|jpg|png';
            $config['max_sizes']    = 1000000000;
            $config['max_width']    =10240;
			$config['max_height']   =7860;
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('pendaftaran_view',$error);
            }else{
            $this->Pendaftaran_model->inputPendaftaran();
            $this->load->view('sukses_daftar');
        }
	}
	}
}
?>