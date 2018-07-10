<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model{

  public function __construct()
  {
    parent:: __construct();
  }
  public function createBerita()
  {
    $object = array('judulBerita'=> $this->input->post('judul'),);
    $object += array('isi'=> $this->input->post('isi'));
    $this->db->insert('berita',$object);
  }
  public function tambahAngkatan(){
    $object= array('angkatan'=>$this->input->post('angkatan'),);
    $object +=array('tahunJabatan'=>$this->input->post('tahun'));
    $this->db->insert('angkatan',$object);
  }
  public function tambahDataAngkatan(){
    $object =array ('nama'=>$this->input->post('nama'),);
    $object += array('idAngkatan' =>$this->input->post('idAngkatan'),);
    $object+= array('idDivisi'=>$this->input->post('idDivisi'));
    $this->db->insert('dataangkatan',$object);
  }
  public function createDivisi(){
    $data = array('namaDivisi'=>$this->input->post('nama'));
    $this->db->insert('divisi',$data);
  }
  public function getBerita($id)
  {
    $this->db->where('idBerita',$id);
    $query=$this->db->get('berita');
    return $query->result();
  }
  public function getDivisi($id){
    $this->db->where('idDivisi',$id);
    $query=$this->db->get('divisi');
    return $query->result();
  }
  public function getAngkatan($id){
    $this->db->where('idAngkatan',$id);
    $query=$this->db->get('angkatan');
    return $query->result();
  } 
  public function getAllDaftar()
  {
      $query = $this->db->get('pendaftaran');
      if($query->num_rows()>0){
          return $query->result();
      }
  }
  public function updateById($id){
    $data = array('judulBerita'=>$this->input->post('judul'),);
    $data += array('isi' => $this->input->post('isi'));
    $this->db->where('idBerita',$id);
    $this->db->update('berita',$data);
  }
  public function updateAngkatanId($id){
    $data= array('angkatan'=>$this->input->post('angkatan'),);
    $data += array('tahunJabatan'=>$this->input->post('tahun'));
    $this->db->where('idAngkatan',$id);
    $this->db->update('angkatan',$data);
  }

public function updateDivisiId($id){
    $data= array('namaDivisi'=>$this->input->post('nama'));
    $this->db->where('idDivisi',$id);
    $this->db->update('divisi',$data);
  }

  public function getdataAngkatan($id)
	{
    $query = $this->db->query("SELECT ang.idAngkatan as id, dv.idDivisi as id, nama as nm, 
   namaDivisi as nd
    FROM dataangkatan da INNER JOIN angkatan ang on da.idAngkatan=ang.idAngkatan 
    INNER JOIN divisi dv on dv.idDivisi=da.idDivisi WHERE ang.idAngkatan=$id");
		return $query->result_array();
  }
  public function getTampilBerita()
  {
    $query = $this->db->query("Select * from berita");
    return $query->result_array(); 
  }
  public function getTampilAngkatan(){
    $query= $this->db->query("select * from angkatan");
    return $query->result_array();
  }
  public function getTampilDivisi(){
    $query= $this->db->query("select * from divisi");
    return $query->result_array();
  }
  public function getTampilDataAngkatan($id){
    $query=$this->db->query("SELECT * from dataangkatan WHERE idDataAngkatan=$id");
    return $query->result_array();
  }
  public function delete($id)
  {
    $this->db->where('idBerita',$id);
    $this->db->delete('berita');
  }
  public function deleteAngkatan($id){
    $this->db->where('idAngkatan',$id);
    $this->db->delete('angkatan');
  }
  public function deleteDivisi($id){
    $this->db->where('idDivisi',$id);
    $this->db->delete('divisi');
  }
  public function deleteDataAngkatan($id){
    $this->db->where('idDataAngkatan',$id);
    $this->db->delete('dataangkatan');
  }
}