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
    $data = array('namaDivisi'=>$this->input->post('divisi'),);
     $data += array('keterangan'=>$this->input->post('keterangan'),);
      $data += array('gambar'=>$this->upload->data('file_name'));
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
  public function getTampilNews(){
    $query = $this->db->query("select * from berita where idBerita=1");
    return $query->result_array();
  }
  public function getAllBerita()
  {
    $query =$this->db->query("SELECT * from berita where idBerita != 1");
    return $query->result_array();
  }
  public function getTampilDaftar()
  {
    $query =$this->db->query("SELECT * FROM pendaftaran");
    return $query->result();
  }
  public function tampilDaftarid($id)
  {
    $query= $this->db->query("SELECT * FROM pendaftaran WHERE idPendaftaran=$id");
    return $query->result();
  }
  public function simpanAccept($id){
    $query=$this->db->query("update pendaftaran set keterangan='terima' WHERE idPendaftaran=$id");
    // return $query->result();
  }
  public function acc(){
    $data=$this->input->post();
    $this->db->insert('hasilseleksi',$data);
  }
  public function updateDaftar($id)
  {
    
    
    
    if($this->upload->data('file_name')==""){
      $data= array('nama'=>$this->input->post('nama'),);
      $data += array('nim'=>$this->input->post('nim'),);
      $data += array('tempatLahir'=>$this->input->post('tempat'),);
      $data += array('tanggalLahir'=>$this->input->post('tgl'),);
      $data += array('jenisKelamin'=>$this->input->post('kelamin'),);
      $data += array('divisi'=>$this->input->post('divisi'),);
      $data += array('jurusan'=>$this->input->post('jurusan'),);
      $data += array('alamat'=>$this->input->post('alamat'),);
      $data += array('prestasi'=>$this->input->post('prestasi'),);
      $data += array('noHp'=>$this->input->post('noHp'));
      // $data += array('foto'=>$this->input->data('file_name'),);
      $this->db->where('idPendaftaran',$id);
      $this->db->update('pendaftaran',$data);
    }else{
      $data= array('nama'=>$this->input->post('nama'),);
      $data += array('nim'=>$this->input->post('nim'),);
      $data += array('tempatLahir'=>$this->input->post('tempat'),);
      $data += array('tanggalLahir'=>$this->input->post('tanggal'),);
      $data += array('jenisKelamin'=>$this->input->post('kelamin'),);
      $data += array('divisi'=>$this->input->post('divisi'),);
      $data += array('jurusan'=>$this->input->post('jurusan'),);
      $data += array('alamat'=>$this->input->post('alamat'),);
      $data += array('prestasi'=>$this->input->post('prestasi'),);
      $data += array('noHp'=>$this->input->post('noHp'),);
      $data += array('foto'=>$this->upload->data('file_name'),);
      
      $this->db->where('idPendaftaran',$id);
      $this->db->update('pendaftaran',$data);
    }
  }
    public function hapusDaftarTable($id)
    {
      $this->db->where('idPendaftaran',$id);
      $this->db->delete('pendaftaran');
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
  if($this->upload->data('file_name')==""){
    $data= array('namaDivisi'=>$this->input->post('divisi'));
    $data += array('keterangan'=>$this->input->post('keterangan'));
    $this->db->where('idDivisi',$id);
    $this->db->update('divisi',$data);
  }
   else{
    $data= array('namaDivisi'=>$this->input->post('divisi'),);
    $data += array('keterangan'=>$this->input->post('keterangan'));
    $data += array('gambar'=>$this->upload->data('file_name'));
    $this->db->where('idDivisi',$id);
    $this->db->update('divisi',$data);
  }
}

  public function getdataAngkatan($id)
	{
    $query = $this->db->query("SELECT ang.idAngkatan as id, dv.idDivisi as id, nama as nm, 
   namaDivisi as nd, idDataAngkatan as idA
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