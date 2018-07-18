<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_model extends CI_Model{

  public function __construct()
  {
    parent:: __construct();
  }
  public function insertDaftar()
  {
    $level='user';
      $object = array('nama' => $this->input->post('nama'),);
      $object += array('username'=> $this->input->post('username'),);
      $object += array('password'=> MD5($this->input->post('password')),);
      $object += array('jurusan' => $this->input->post('jurusan'),);
      $object += array('universitas' => $this->input->post('universitas'),);
      $object += array('level' =>$level);
      $this->db->insert('login',$object);
  }
}