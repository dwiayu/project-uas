<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

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
            $this->load->model('Admin_model');
		}else{
			redirect('login','refresh');
		}
	}
    
	
	public function index()
	{
		
		$data['Berita']=$this->Admin_model->getTampilBerita();
		$this->load->view('news',$data);
	}
	public function hitung(){
		$data['Hitung'] = $this->Hitung_model->tampilHitung();
		$this->load->view('news',$data);
	}
	
}
?>