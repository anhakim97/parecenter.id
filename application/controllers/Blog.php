<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('blog_model');
		$this->load->helper('url_helper');
	}
	public function index()
	{
		$data['blog'] = $this ->blog_model->get_blog();
		$data['title'] = 'Arsip Berita' ; 
		$this->load->view('templates/header');
		$this->load->view('blog/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($id_konten = NULL)
	{
		$data['blog_item'] = $this ->blog_model->get_blog($id_konten); 
		$this->load->view('templates/header');
		$this->load->view('blog/view', $data);
		$this->load->view('templates/footer');
	}
}