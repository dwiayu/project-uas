<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    // public function __construct()
	// {
	// 	parent::__construct();
	// 	if($this->session->userdata('logged_in')){
	// 		$session_data=$this->session->userdata("logged_in");
	// 		$data['username']=$session_data['username'];
	// 		$data['level']=$session_data['level'];
	// 		$current_controller = $this->router->fetch_class();
	// 		$this->load->library('acl');
	// 		if(! $this->acl->is_public($current_controller))
	// 		{
	// 			if(! $this->acl->is_allowed($current_controller, $data['level']))
	// 			{
	// 				redirect('login/logout','refresh');
	// 			}
	// 		}
	// 		}else{
	// 		redirect('login','refresh');
	// 	}
	// }

	public function index()
    {
        $this->load->model('Daftar_model');
         $this->load->view('daftar');
    }
    public function create()
    {
        $this->load->model('Daftar_model');
        $this->form_validation->set_rules('username','Username', 'trim|required');
        $this->form_validation->set_rules('password','Password', 'trim|required');
        $this->form_validation->set_rules('confirm', 'Password Confirmation Field', 'required|matches[password]');
        if($this->form_validation->run()==FALSE){
            $this->load->view('daftar');
        }else{
            
          $this->Daftar_model->insertDaftar();
          $this->load->view('sukses_input');
      }
    }

	}
