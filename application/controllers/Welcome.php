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
		$this->load->view('dashboard');
	}

	public function masuk()
	{
		$data['masuk'] = $this->masuk->tabmasuk('surat_masuk')->result();
		$this->load->view('surat_masuk',$data);
	}

	public function keluar()
	{
		$this->load->view('surat_keluar'); 		
	}

	public function arsip()
	{
		$this->load->view('arsip');
	}

	public function no_agenda()
	{
		$this->load->view('no_agenda');
	}

	public function no_wilayah()
	{
		$this->load->view('no_wilayah');
	}
}
