<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model{

  public function __construct()
  {
    parent:: __construct();
  }

  public function inputPendaftaran(){
    $tanggal=$this->input->post('tanggal');
    $tglraw=explode('-',$tanggal);
    $tglfix=$tglraw[2].'-'.$tglraw[1].'-'.$tglraw[0];
    $object= array('nama'=>$this->input->post('nama'),);
    $object += array('nim'=>$this->input->post('nim'),);
    $object += array('tempatLahir'=>$this->input->post('tempat'),);
    $object += array('tanggalLahir'=>$tglfix,);
    $object += array('jenisKelamin'=>$this->input->post('kelamin'),);
    $object += array('jurusan'=>$this->input->post('jurusan'),);
    $object += array('alamat'=>$this->input->post('alamat'),);
    $object += array('noHp'=>$this->input->post('noHp'),);
    $object += array('prestasi'=>$this->input->post('prestasi'),);
    $object += array('foto'=>$this->upload->data('file_name'));
    $this->db->insert('pendaftaran',$object);

  }
  public function lihatHasil()
  {
    $query =$this->db->query("SELECT * FROM pendaftaran WHERE keterangan='terima'");
    return $query->result_array();
  }
  public function getNama(){
    $session_data=$this->session->userdata("logged_in");
    $id=$session_data['id'];
    $query=$this->db->query("select * from login where id=$id");
    return $query->result_array(); 
    
  }
}
 ?>