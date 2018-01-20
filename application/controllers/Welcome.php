<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('masuk');
	}
	public function index()
	{
		$this->load->view('super-admin/dashboard');
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
		if ($id) {
			$nilai = substr($id['no_urut'], 1);
			$nilai_baru = (int) $nilai;
			$nilai_baru++;
			$nilai_baru2 = "M".str_pad($nilai_baru, 4, "0", STR_PAD_LEFT);
		}else{
			$nilai_baru2 = "M0001";
		}
		$object = array('no_urut' => $nilai_baru2 , 
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
		$where = array('no_urut' =>$id );
		$this->masuk->delmasuk('surat_masuk',$where);
		redirect('Welcome/masuk');
	}

	public function editmas($id)
	{
		$where = array('no_urut' => $id);
		$data['masuk'] = $this->masuk->detail('surat_masuk',$where)->result();
		$this->load->view('super-admin/edit_masuk',$data);
	}

	public function editmasuk()
	{
		$id = $this->input->post('no_urut');
		$where = array('no_urut' => $id);
		$object = array('no_urut' => $id, 
						'tgl_surat' => $this->input->post('tanggal'),
						'kode_agenda' => $this->input->post('kode'),
						'no_surat' => $this->input->post('nosur'),
						'dari' => $this->input->post('dari'),
						'perihal' => $this->input->post('perihal'),
						'pengelola'=>$this->input->post('pengelola'));
		$this->masuk->editmas('surat_masuk',$object,$where);
		redirect('Welcome/masuk'.$id);
	}

	public function keluar()
	{
		$this->load->view('super-admin/surat_keluar'); 		
	}

	public function arsip()
	{
		$this->load->view('super-admin/arsip');
	}

	public function no_agenda()
	{
		$this->load->view('super-admin/no_agenda');
	}

	public function no_wilayah()
	{
		$this->load->view('super-admin/no_wilayah');
	}
}
