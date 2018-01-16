<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
 
 public function tabmasuk($table)
 {
 	$this->db->get('surat_masuk');
 }
	

}

/* End of file masuk.php */
/* Location: ./application/models/masuk.php */