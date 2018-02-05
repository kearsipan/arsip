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
		$this->load->view('super-admin/surat_masuk',$data);
	}

	public function input_masuk()
	{
		$this->load->view('super-admin/input-masuk');
	}

	public function add_masuk()
	{
		
		$id = $this->masuk->get_masuk();
		$object = array(
						'tgl_surat' => $this->input->post('tanggal'),
						'kode_agenda' => $this->input->post('kode'),
						'no_surat' => $this->input->post('nosur'),
						'dari' => $this->input->post('dari'),
						'perihal' => $this->input->post('perihal'),
						'pengelola'=>$this->input->post('pengelola'));
		$this->masuk->add_masuk('surat_masuk',$object);
		redirect('Welcome/masuk');
	}

	public function delmasuk($id)
	{
		$where = array('id_masuk' =>$id );
		$this->masuk->delmasuk('surat_masuk',$where);
		redirect('Welcome/masuk');
	}

	public function editmas($id)
	{
		$where = array('id_masuk' => $id);
		$data['editmas'] = $this->masuk->detail('surat_masuk',$where)->result();
		$this->load->view('super-admin/edit_masuk',$data);
	}

	public function editmasuk($id)
	{
		$where = array('id_masuk' => $id);
		$object = array('id_masuk' => $id, 
						'tgl_surat' => $this->input->post('tanggal'),
						'kode_agenda' => $this->input->post('kode'),
						'no_surat' => $this->input->post('nosur'),
						'dari' => $this->input->post('dari'),
						'perihal' => $this->input->post('perihal'),
						'pengelola'=>$this->input->post('pengelola'));
		//die(var_dump($object));
		$this->masuk->editmas('surat_masuk',$object,$where);
		redirect('Welcome/masuk');
	}

	//tutup surat masuk

	//desposisi
	public function desposisi()
	{
		$where = array('arsip' => '0');
		$data['ms'] = $this->db->get_where('surat_masuk' ,$where)->result();
		$this->load->view('super-admin/desposisi',$data);
	}

	public function detail($id)
	{
		$where = array('id_despos' => $id);
		$data['editmas'] = $this->db->get('surat_masuk',$where)->result();
		$data['despos'] = $this->masuk->detail('desposisi',$where)->result();
		$this->load->view('super-admin/detail',$data);
	}

	public function add_despos()
	{
		
		$object = array('tgl_surat' => $this->input->post('tanggal'),
						'no_surat' => $this->input->post('nosur'),
						'perihal' => $this->input->post('perihal'),
						'kode_agenda' => $this->input->post('kode'),
						'asal_surat' => $this->input->post('asal'),
						'diterima_tgl' => $this->input->post('diterima'),
						'pemberi_despos' => $this->input->post('pemberi'),
						'terusan' => $this->input->post('terusan'),
						'untuk' => $this->input->post('untuk'),
						'isi_desposisi'=>$this->input->post('isi'));
		$this->masuk->add_despos('desposisi',$object);
		redirect('Welcome/desposisi');
	}

	public function proses_arsip($id)
	{
		$where = array('id_masuk' => $id);
		$data  = array('arsip' => 1);

		$res = $this->db->update('surat_masuk' ,$data ,$where);

		if ($res >= 1) {
				redirect('Welcome/desposisi');
			}	

	}


	//tutup desposisi

	public function arsip()
	{
		$data['arsip'] = $this->db->get('kode_agenda')->result();
		$this->load->view('super-admin/arsip' ,$data);
	}

	public function detailarsip($kode)
	{
		$kode = array('kode_agenda' => $kode,
					  'arsip' => 1);

		$data['data'] = $this->db->get_where('surat_masuk' ,$kode)->result();
		$this->load->view('super-admin/datailarsip' ,$data);
	}

	public function no_agenda()
	{
		$this->load->view('super-admin/no_agenda');
	}

	public function no_wilayah()
	{
		$this->load->view('super-admin/no_wilayah');
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
}
