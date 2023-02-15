<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen_model extends CI_Model{
  private $table = 'proposal';
  private $pk    = 'id';

  public function getAllproposal()
  {
    return $this->db->get($this->table)->result_array();
  }

  public function getproposalById($id)
  {
    return $this->db->get_where($this->table, [$this->pk => $id])->row_array();
  }

  public function insertProposal($data)
  {
    $this->db->insert($this->table, $data);
  }

  public function updateProposal($data, $id)
  {
    $this->db->update($this->table, $data, [$this->pk => $id]);
  }

  public function deleteProposal($id)
  {
    $this->db->delete($this->table, [$this->pk => $id]);
  }

}