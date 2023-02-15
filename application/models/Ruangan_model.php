<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }

  // Get All Data Ruangan
  public function get_all()
  {
    $this->db->select('*');
    $this->db->from('ruangan');
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get();
    return $query->result();
  }

  public function insert($data)
  {
    $this->db->insert('ruangan', $data);
  }

}