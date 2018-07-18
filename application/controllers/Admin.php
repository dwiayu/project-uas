<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('logged_in')){
            $session_data=$this->session->userdata("logged_in");
            $data['username']=$session_data['username'];
            $data['level']=$session_data['level'];
            $data['id']=$session_data['id'];
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
        $this->load->view('berita',$data);
    }
    public function tampilAngkatan(){
        $this->load->model('Admin_model');
        $data['Angkatan']= $this->Admin_model->getTampilAngkatan();
        $this->load->view('angkatan',$data);
    }
    public function tampilDataAngkatan($id){
        $this->load->model('Admin_model');
        $tampil['DataAngkatan']=$this->Admin_model->getTampilDataAngkatan($id);
        $this->load->view('dataAngkatan',$tampil);
    }
    public function tampilDaftarr()
    { 
        $this->load->view('hasil_pendaftarann');
    }
    public function getAllDaftar()
    {
        $this->load->model('Admin_model');
        $result = $this->Admin_model->getAllDaftar(); 
        header("Content-Type: application/json");
        echo json_encode($result);
    }
    public function createBerita()
    {
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('judul','Judul', 'trim|required');
        $this->form_validation->set_rules('isi','Isi', 'trim|required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('input_berita');
        }else{
            
          $this->Admin_model->createBerita();
          $this->load->view('sukses_berita');
      }

    }
    public function tambahAngkatan(){
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('angkatan','angkatan','trim|required');
        $this->form_validation->set_rules('tahun', 'tahun','trim|required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('input_angkatan');
        }else{
            $this->Admin_model->tambahAngkatan();
            $this->load->view('suksesinputangkatan');
        }

    }
    public function tambahDataAngkatan(){
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('nama','nama','trim|required');
        $this->form_validation->set_rules('idAngkatan','idAngkatan','trim|required');
        $this->form_validation->set_rules('idDivisi','idDivisi','trim|required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('input_data_angkatan');
        }else{
            $this->Admin_model->tambahDataAngkatan();
            $this->load->view('sukses_input_data_angkatan');
        }
    }

    public function createDivisi(){
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('divisi','divisi','trim|required');
        $this->form_validation->set_rules('keterangan','keterangan','trim|required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('input_divisi');
        }else{
            $config['upload_path']  = './assets/uploads/';
            $config['allowed_types']    ='gif|jpg|png';
            $config['max_sizes']    = 1000000000;
            $config['max_width']    =10240;
            $config['max_height']   =7860;
            $this->load->library('upload',$config);
            if( ! $this->upload->do_upload('userfile'))
            {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('input_divisi');
            }
            else{
            $this->Admin_model->createDivisi();
            $this->load->view('sukses_input_divisi');
        }
    }
    }

    public function tampilDivisi()
    {
         $this->load->model('Admin_model');
        $data['Divisi']= $this->Admin_model->getTampilDivisi();
        $this->load->view('divisi',$data);
    }

    public function updateBerita($id)
    {
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('judul','Judul', 'trim|required');
        $this->form_validation->set_rules('isi', 'Isi', 'trim|required');
        $data['Berita']=$this->Admin_model->getBerita($id);
        if($this->form_validation->run()==FALSE){
            $this->load->view('edit_berita_view',$data);
        }else{
            $this->Admin_model->updateById($id);
            $this->load->view('edit_berita_sukses',$data);
        }
    }
    public function updateAngkatan($id){
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('angkatan','angkatan','trim|required');
        $this->form_validation->set_rules('tahun','tahun','trim|required');
        $data['Angkatan']=$this->Admin_model->getAngkatan($id);
        if($this->form_validation->run()==FALSE){
            $this->load->view('edit_angkatan_view',$data);         
        }else{
            $this->Admin_model->updateAngkatanId($id);
            $this->load->view('edit_angkatan_sukses',$data);
        }
    }
    
   public function updateDivisi($id){
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('divisi','divisi','trim|required');
        $this->form_validation->set_rules('keterangan','keterangan','trim|required');
        $data['Divisi']= $this->Admin_model->getDivisi($id);
        if($this->form_validation->run()==FALSE){
            $this->load->view('edit_divisi_view',$data);
        }else{
             $config['upload_path']  = './assets/uploads/';
            $config['allowed_types']    ='gif|jpg|png';
            $config['max_sizes']    = 1000000000;
            $config['max_width']    =10240;
            $config['max_height']   =7860;
            $this->load->library('upload',$config);
            if( ! $this->upload->do_upload('userfile'))
            {
                  $this->Admin_model->updateDivisiId($id);
            $this->load->view('edit_divisi_sukses');
            }
            else{
              $this->Admin_model->updateDivisiId($id);
            $this->load->view('edit_divisi_sukses');
        }
           
            
          
        }
    }

    public function detailAngkatan($id)
	{
		$this->load->model('Admin_model');
        $tampil['dataAngkatan'] = $this->Admin_model->getdataAngkatan($id);
        $this->load->view('detail',$tampil);
        
	}
    public function hapusBerita($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->delete($id);
        redirect('admin');
    }
    public function hapusAngkatan($id){
        $this->load->model('Admin_model');
        $this->Admin_model->deleteAngkatan($id);
        redirect('admin/tampilAngkatan');
    }
    public function hapusDivisi($id){
        $this->load->model('Admin_model');
        $this->Admin_model->deleteDivisi($id);
        redirect('admin/tampilDivisi');
    }
    public function hapusDataAngkatan($id){
        $this->load->model('Admin_model');
        $this->Admin_model->deleteDataAngkatan($id);
        redirect('admin/tampilAngkatan');
    }
    public function dataTable()
    {
        $this->load->model('Admin_model');
        $data['pendaftaran_list']=$this->Admin_model->getTampilDaftar();
        $this->load->view('hasil_daftar_dt',$data);
    }
    public function simpanHasil($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->simpanAccept($id);
        echo "<script> alert('Daftar Diterima');
        window.location.href='../../admin/dataTable'; </script>";
    }
    public function hapusDataTable($id)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapusDaftarTable($id);
        redirect('admin/dataTable');
    }
    public function updateDaftar($id)
    {
        $this->load->model('Admin_model');
        $this->form_validation->set_rules('nama', 'nama', 'trim|required');
        $this->form_validation->set_rules('nim', 'nim', 'trim|required');
        $this->form_validation->set_rules('tempat', 'tempat', 'trim|required');
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
        $this->form_validation->set_rules('kelamin', 'kelamin', 'trim|required');
        $this->form_validation->set_rules('divisi', 'divisi', 'trim|required');
        $this->form_validation->set_rules('jurusan', 'jurusan', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('prestasi', 'prestasi', 'trim|required');
        $this->form_validation->set_rules('noHp', 'noHp', 'trim|required');
        // $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
        $data['daftar']= $this->Admin_model->tampilDaftarid($id);
        
        if($this->form_validation->run()==FALSE){
            $this->load->view('edit_daftar',$data);
        }else{
            $config['upload_path']      ='./assets/uploads/';
            $config['allowed_types']    ='gif|jpg|png';
            $config['max_size']         =1000000000;
            $config['max_width']        =10240;
            $config['max_height']       =7680;

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('foto')){
                $this->Admin_model->updateDaftar($id);
                echo "<script> alert('Daftar anda berhasil dirubah');
                window.location.href='../../admin/dataTable'; </script>";
            
            }else{
                $this->Admin_model->updateDaftar($id);
                echo"<script> alert('Daftar berhasil dirubah, dengan gambar');
                window.location.href='../../admin/dataTable';</script>";
               
            }
        }
    }
  
}