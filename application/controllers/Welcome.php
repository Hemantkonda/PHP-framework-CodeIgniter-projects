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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	

	public function header($a='')
	{
		$data['profile'] = $this->Data->get_profile();
		$data['active_page'] = $a;
		$this->load->view('website/template/header',$data);
	}

	public function footer()
	{
		$data['profile'] = $this->Data->get_profile();
		$data['service'] = $this->Data->get_service();
		$this->load->view('website/template/footer', $data);
	}

	public function index()
	{
		$active_page = 'index';
		$this->header($active_page);
		$data['service'] = $this->Data->get_service();
		$data['project'] = $this->Data->get_project();
		$this->load->view('website/index', $data);
		$this->footer();
	}

	public function about()
	{
		$active_page = 'about';
		$this->header($active_page);
		$this->load->view('website/about');
		$this->footer();
	}

	public function services()
	{
		$active_page = 'services';
		$this->header($active_page);
		$data['service'] = $this->Data->get_service();
		$this->load->view('website/services', $data);
		$this->footer();
	}

	public function single_service()
	{
		$active_page = 'services';
		$this->header($active_page);
		$this->load->view('website/single_service');
		$this->footer();
	}

	public function projects()
	{
		$active_page = 'projects';
		$this->header($active_page);
		$this->load->view('website/projects');
		$this->footer();
	}

	public function blogs()
	{
		$active_page = 'blogs';
		$this->header($active_page);
		$this->load->view('website/blogs');
		$this->footer();
	}

	public function single_blog()
	{
		$active_page = 'blogs';
		$this->header($active_page);
		$this->load->view('website/single_blog');
		$this->footer();
	}

	public function contact()
	{
		$this->header();
		$this->load->view('website/contact');
		$this->footer();
	}
}
