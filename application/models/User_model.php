<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // Menampilkan semua data pengguna pada tabel user
  public function getAllUser()
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->order_by('id', 'DESC');
    return $this->db->get();
  }

  // Menampilkan data pengguna berdasarkan id
  public function getUserById($id)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  // Menambahkan data pengguna
  public function insert($data)
  {
    $this->db->insert('user', $data);
  }

  // Mengubah data pengguna
  public function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('user', $data);
  }

  // Menghapus data pengguna
  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }
}