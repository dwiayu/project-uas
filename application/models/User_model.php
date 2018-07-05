<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model{

  public function __construct()
  {
    parent:: __construct();
  }
  
  public function getdataAngkatan($id)
	{
    $query = $this->db->query("SELECT ang.idAngkatan as id, dv.idDivisi as id, nama as nm, 
   namaDivisi as nd
    FROM dataangkatan da INNER JOIN angkatan ang on da.idAngkatan=ang.idAngkatan 
    INNER JOIN divisi dv on dv.idDivisi=da.idDivisi WHERE ang.idAngkatan=$id");
		return $query->result_array();
  }
  
  public function getTampilAngkatan(){
    $query= $this->db->query("select * from angkatan");
    return $query->result_array();
  }
}