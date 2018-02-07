<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('masuk');
		$this->load->helper('url');

		if ($this->session->userdata('level') != "admin") {
			redirect(base_url('login'));
		}

	}
	

	public function dashboard()
	{
		$this->load->view('admin/dashboard');
	}

	

	//agenda surat masuk
	public function masuk()
	{
		$data['masuk'] = $this->masuk->tabmasuk('surat_masuk');
		$this->load->view('admin/surat_masuk',$data);
	}

	//tutup surat masuk

	//desposisi
	public function desposisi()
	{
		$where = array('arsip' => '1');
		$data['ms'] = $this->db->get_where('surat_masuk' ,$where)->result();
		$this->load->view('admin/desposisi',$data);
	}

	public function detail($id)
	{
		$where = array('id_despos' => $id);
		$data['editmas'] = $this->db->get('surat_masuk',$where)->result();
		$data['despos'] = $this->masuk->detail('desposisi',$where)->result();
		$this->load->view('admin/detail',$data);
	}

	public function lihat_despos($id)
	{
		$where = array();
		$data['ms'] = $this->db->get_where('surat_masuk' ,$where)->result();
		$this->load->view('admin/lihat_despos',$data);
	}

	public function proses_despos($id)
	{
		$id = array('id_masuk' => $id);
		$data = array(
			'diterima_tgl' => $this->input->post('tanggal'),
			'isi_desposisi' => $this->input->post('isi'),
			'di_teruskan' => $this->input->post('teruskan'),
			'untuk' => $this->input->post('untuk'),
					); 
		$res = $this->db->update('surat_masuk',$data ,$id);
		if ($res > 0) {
			redirect('admin/desposisi');
		}
	}





	public function proses_arsip($id)
	{
		$where = array('id_masuk' => $id);
		$data  = array('arsip' => 1);

		$res = $this->db->update('surat_masuk' ,$data ,$where);

		if ($res >= 1) {
				redirect('admin/desposisi');
			}	

	}


	//tutup desposisi

	public function arsip()
	{
		$data['arsip'] = $this->db->get('kode_agenda')->result();
		$this->load->view('admin/arsip' ,$data);
	}

	public function detailarsip($kode)
	{
		$kode = array('kode_agenda' => $kode,
					  'arsip' => 1);

		$data['data'] = $this->db->get_where('surat_masuk' ,$kode)->result();
		$this->load->view('admin/datailarsip' ,$data);
	}

	public function no_agenda()
	{
		$this->load->view('admin/no_agenda');
	}

	//laporan pdf desposisi

	public function laporan_pdf($id){

		$where = array('id_despos' => $id);
		$data['tampil'] = $this->masuk->detail('desposisi',$where)->result();
		$this->load->view('pdf',$data);

    $this->load->library('pdf');

    $this->pdf->setPaper('A4', 'potrait');
    $this->pdf->filename = "laporan-petanikode.pdf";
    $this->pdf->load_view('pdf', $data);


	}

	public function suker()
	{
		$data['suker'] = $this->masuk->suker('surat_keluar');
		$this->load->view('admin/surat_keluar',$data);
	}
}
