<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // Menampilkan data acara
  function getAcara()
  {
    $this->db->select('*');
    $this->db->from('acara');
    return $this->db->get();
  }

  // Menampilkan data acara berdasarkan id
  function getAcaraById($id)
  {
    $this->db->select('*');
    $this->db->from('acara');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  // Insert data acara
  function insertAcara($data)
  {
    $this->db->insert('acara', $data);
  }

  // Edit data acara berdasarkan id
  function editAcara($where, $data)
  {
    $this->db->where($where);
    $this->db->update('acara', $data);
  }

  // Hapus data acara
  function hapusAcara($where)
  {
    $this->db->where($where);
    $this->db->delete('acara');
  }

}