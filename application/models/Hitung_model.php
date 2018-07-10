<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung_model extends CI_Model{

  public function __construct()
  {
    parent:: __construct();
  }

  public function tampilHitung(){
    $query=$this->db->query("SELECT COUNT(nama)as jumlah FROM pendaftaran");
    return $query->result_array();
  }
  
}
 ?>