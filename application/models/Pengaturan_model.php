<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaturan_model extends CI_Model{

  // Method untuk menampilkan semua data pada tabel tentang
  public function getTentang()
  {
    return $this->db->get('tentang')->result_array();
  }

  // Method untuk menampilkan data pada tabel tentang berdasarkan id
  public function getTentangById($id)
  {
    return $this->db->get_where('tentang', ['id' => $id])->row_array();
  }

  // Method untuk mengupdate data pada tabel tentang
  public function update($id, $data)
  {
    $this->db->where('id', $id);
    $this->db->update('tentang', $data);
  }

}