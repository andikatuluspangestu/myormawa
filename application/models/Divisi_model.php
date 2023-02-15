<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Divisi_model extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  /**
   * Semua
   * Tentang
   * Divisi
   * dan Program
   * Kerja
   */

  // Menampilkan data Divisi
  function getDivisi()
  {
    $this->db->select('*');
    $this->db->from('divisi');
    return $this->db->get();
  }

  // Menampilkan nama divisi berdasarkan id anggota
  function getDivisiById($id)
  {
    $this->db->select('*');
    $this->db->from('divisi');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  // Insert data Divisi
  function insertDivisi($data)
  {
    $this->db->insert('divisi', $data);
  }

  // Edit data Divisi berdasarkan id
  function editDivisi($where, $data)
  {
    $this->db->where($where);
    $this->db->update('divisi', $data);
  }

  // Hapus data Divisi
  function hapusDivisi($where)
  {
    $this->db->where($where);
    $this->db->delete('divisi');
  }

  // Tampilkan jumlah anggota dalam setiap divisi
  function getJumlahAnggota()
  {
    $this->db->select('divisi.nama_divisi, COUNT(anggota.id) as jumlah_anggota');
    $this->db->from('divisi');
    $this->db->join('anggota', 'anggota.divisi = divisi.id');
    $this->db->group_by('divisi.nama_divisi');
    return $this->db->get();
  }

  // Menampilkan semua data Program Kerja
  function getProker()
  {
    $this->db->select('*');
    $this->db->from('program_kerja');
    return $this->db->get();
  }

  // Tambah data Program Kerja
  function insertProker($data)
  {
    $this->db->insert('program_kerja', $data);
  }

  // Update status program kerja
  function updateStatus($where, $data)
  {
    $this->db->where($where);
    $this->db->update('program_kerja', $data);
  }

  function getProkerById($id)
  {
    $this->db->select('*');
    $this->db->from('program_kerja');
    $this->db->where('id', $id);
    return $this->db->get();
  }

  // Hapus Program Kerja
  function deleteProker($where)
  {
    $this->db->where($where);
    $this->db->delete('program_kerja');
  }


}
