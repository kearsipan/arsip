<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Model {

	public function detail($table,$where)
	{
		return $this->db->get_where($table,$where);
	}

 	public function cek_login($table,$where)
 	{		
		return $this->db->get_where($table,$where);
	}	
 //mod surat masuk
 public function tabmasuk($table)
 {
 	$query = $this->db->get('surat_masuk')->result();
 	return $query;
 }

 public function add_masuk($table,$object)
	{
		$this->db->insert($table,$object);
	}
public function get_masuk()
	{
		$query = $this->db->query("SELECT MAX(id_masuk) AS id_masuk FROM surat_masuk");
		return $query->row_array();
	}

public function delmasuk($table,$where){
		$this->db->where($where);
		$this->db->delete($table); 
	}

public function editmas($table,$object,$where)
	{
		$this->db->update($table,$object,$where);
	}

	//desposisi 

	public function despos($table)
 {
 	$query = $this->db->get('desposisi')->result();
 	return $query;
 }

  public function add_despos($table,$object)
	{
		$this->db->insert($table,$object);
	}

	//surat keluar

	public function suker($table)
 {
 	$query = $this->db->get('surat_keluar')->result();
 	return $query;
 }

 public function add_suker($table,$object)
	{
		$this->db->insert($table,$object);
	}
public function get_suker()
	{
		$query = $this->db->query("SELECT MAX(id_keluar) AS id_keluar FROM surat_keluar");
		return $query->row_array();
	}

public function delsuker($table,$where){
		$this->db->where($where);
		$this->db->delete($table); 
	}

public function editsuker($table,$object,$where)
	{
		$this->db->update($table,$object,$where);
	}

	//nomor agenda

	public function agenda($table)
	 {
	 	$query = $this->db->get('kode_agenda')->result();
	 	return $query;
	 }

	 public function add_agenda($table,$object)
		{
			$this->db->insert($table,$object);
		}

		public function get_agenda()
	{
		$query = $this->db->query("SELECT MAX(id) AS id FROM kode_agenda");
		return $query->row_array();
	}
	

}

/* End of file masuk.php */
/* Location: ./application/models/masuk.php */