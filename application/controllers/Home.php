<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('landing/index');
		$this->load->view('template/footer');
	}

	public function acessoevento()
	{
		$this->load->view('template/head');
		$this->load->view('landing/accessevento');
		$this->load->view('template/footer');
	}

	public function login()
	{
		$this->load->view('template/head');
		$this->load->view('landing/login');
		$this->load->view('template/footer');
	}

	public function evento()
	{
		$this->load->view('template/head');
		$this->load->view('landing/event');
		$this->load->view('template/footer');
	}

	public function create()
	{
		$this->load->view('template/head');
		$this->load->view('landing/create');
		$this->load->view('template/footer');
	}

	public function painel()
	{
		$this->load->view('painel/index');
	}

	public function visitor()
	{
		$this->load->view('usuario/index');
	}
}
