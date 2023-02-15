<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspirasi_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // Menampilkan data aspirasi
  function getAspirasi()
  {
    $this->db->select('*');
    $this->db->from('aspirasi');
    return $this->db->get();
  }

  // Menampilkan data aspirasi berdasarkan id
  function getAspirasiById($id)
  {
    $this->db->select('*');
    $this->db->from('aspirasi');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  // Insert data aspirasi
  function insertAspirasi($data)
  {
    $this->db->insert('aspirasi', $data);
  }

  // Detail data aspirasi berdasarkan id
  function detailAspirasi($id)
  {
    $this->db->select('*');
    $this->db->from('aspirasi');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  // Jumlah data aspirasi yang memiliki status "belumdibaca" dengan LIMIT 1 agar hanya menampilkan 1 data saja dan urut berdasarkan tanggal terbaru

  function jumlahAspirasiBelumDibaca()
  {
    $this->db->select('*');
    $this->db->from('aspirasi');
    $this->db->where('status', 'belumdibaca');
    $this->db->order_by('tanggal', 'ASC');
    $this->db->limit(1);
    return $this->db->get();
  }

  function getAspirasiBelumDibaca(){
    $this->db->select('*');
    $this->db->from('aspirasi');
    $this->db->where('status', 'belumdibaca');
    return $this->db->get();
  }

}
