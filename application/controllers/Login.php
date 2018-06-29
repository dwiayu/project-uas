<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

   
    public function index()
    {
       
         $this->load->view('login');
    }
    public function cekDB($password)
    {
        $this->load->model('Login_model');
        $username= $this->input->post('usernameL');
        $result=$this->Login_model->login($username,$password);
        if($result){
            $sess_array= array();
            foreach ($result as $key){
                $sess_array= array(
                    'id' =>$key->id,
                    'username'=>$key->username,
                    'level' => $key->level);
                $this->session->set_userdata('logged_in',$sess_array);
            }
            return true;
        }else{
            $this->form_validation->set_message('cekDB', "Login Gagal");
            return false;
            
        }
    }
    public function cekLogin(){
       
        $this->form_validation->set_rules('usernameL', 'usernameL', 'trim|required');
        $this->form_validation->set_rules('passwordL', 'passwordL', 'trim|required|callback_cekDB');
        if ($this->form_validation->run()==FALSE){
            $this->form_validation->set_message('cekLogin',"error");
            $this->load->view('login');
        }else{
            redirect('portal','refresh');
        }
                
    }
    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('login','refresh');
    }

}

