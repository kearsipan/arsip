<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
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
		$query = $this->db->query("SELECT MAX(no_urut) AS no_urut FROM surat_masuk");
		return $query->row_array();
	}

public function delmasuk($table,$where){
		$this->db->where($where);
		$this->db->delete($table); 
	}

public function detail($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
public function editmas($table,$object,$where)
	{
		$this->db->update($table,$object,$where);
	}
	

}

/* End of file masuk.php */
/* Location: ./application/models/masuk.php */