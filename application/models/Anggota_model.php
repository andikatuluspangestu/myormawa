<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model{

  private $table = 'anggota';
  private $pk    = 'id';

  public function getAnggota(){
    $this->db->select('*');
    $this->db->from('anggota');
    return $this->db->get();
  }

  public function getAnggotaById($id){
    $this->db->select('*');
    $this->db->from('anggota');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  public function getAllAnggotaWithDivisi(){
    $this->db->select('anggota.*, divisi.nama_divisi as nama_divisi');
    $this->db->from('anggota');
    $this->db->join('divisi', 'anggota.divisi = divisi.id');
    return $this->db->get();
  }

  public function insert($data){
    $this->db->insert($this->table, $data);
  }

  public function update($id, $new_data){
    $this->db->where($this->pk, $id);
    $this->db->update($this->table, $new_data);
  }

  public function delete($id){
    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }


}