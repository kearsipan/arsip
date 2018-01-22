<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Desposisi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk');
		$this->load->helper('url');
	}

	public function desposisi()
	{
		$data['desposisi'] = $this->masuk->despos('desposisi');
		$this->load->view('super-admin/desposisi',$data);
	}

	public function input_despos()
	{
		$this->load->view('super-admin/input_despos');
	}

	public function add_despos()
	{
		
		$id = $this->masuk->get_despos();
		$object = array(
						'tgl_surat' => $this->input->post('tanggal'),
						'asal_surat' => $this->input->post('asal'),
						'no_surat' => $this->input->post('nosur'),
						'kode_agenda' => $this->input->post('kode'),
						'perihal' => $this->input->post('perihal'),
						'diterima_tgl' => $this->input->post('diterima'),
						'pemberi_despos' => $this->input->post('pemberi'),
						'terusan'=> $this->input->post('terusan'),
						'untuk' => $this->input->post('untuk'),
						'isi_desposisi' => $this->input->post('isi'));
		$this->masuk->add_despos('desposisi',$object);
		redirect('desposisi/desposisi');
	}

	public function deldesposisi($id)
	{
		$where = array('id_despos' => $id );
		$this->masuk->deldespos('desposisi',$where);
		redirect('desposisi/desposisi');
	}

	public function editdespos($id)
	{
		$where = array('id_despos' => $id);
		$data['editdespos'] = $this->masuk->detail('desposisi',$where)->result();
		$this->load->view('super-admin/edit_despos',$data);
	}

	public function editdesposi()
	{
		$where = array('id_despos' => $id);
		$object = array(
						'tgl_surat' => $this->input->post('tanggal'),
						'asal_surat' => $this->input->post('asal'),
						'no_surat' => $this->input->post('nosur'),
						'kode_agenda' => $this->input->post('kode'),
						'perihal' => $this->input->post('perihal'),
						'diterima_tgl' => $this->input->post('diterima'),
						'pemberi_despos' => $this->input->post('pemberi'),
						'terusan'=> $this->input->post('terusan'),
						'untuk' => $this->input->post('untuk'),
						'isi_desposisi' => $this->input->post('isi'));
		$this->masuk->editdespos('desposisi',$object);
		redirect('desposisi/desposisi'.$id);
	}
}

/* End of file desposisi.php */
/* Location: ./application/controllers/desposisi.php */