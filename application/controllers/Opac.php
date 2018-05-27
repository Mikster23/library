<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Opac extends CI_Controller {


	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('opac_model');
	 	}


	public function index()
	{

		$data['books']=$this->opac_model->get_all_books();
		$this->load->view('opac_view',$data);
	}





}
