<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Book extends CI_Controller {


	 public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('book_model');
	 	}


	public function index()
	{

		$data['books']=$this->book_model->get_all_books();
		$this->load->view('book_view',$data);
	}
	public function book_add()
		{
			$data = array(
					'isbn' => $this->input->post('isbn'),
					'title' => $this->input->post('title'),
					'other_title' => $this->input->post('othertitle'),
					'author' => $this->input->post('author'),
					'other_author' => $this->input->post('otherauthor'),
					'publisher' => $this->input->post('publisher'),
					'edition' => $this->input->post('edition'),
					'publication_year' => $this->input->post('publicationyear'),
					'category' => $this->input->post('category'),
					'description' => $this->input->post('description'),
					'abstract' => $this->input->post('abstract'),
				);
			$insert = $this->book_model->book_add($data);
			echo json_encode(array("status" => TRUE));
		}
		public function ajax_edit($id)
		{
			$data = $this->book_model->get_by_id($id);



			echo json_encode($data);
		}

		public function book_update()
	{
		$data = array(
			'isbn' => $this->input->post('isbn'),
			'title' => $this->input->post('title'),
			'other_title' => $this->input->post('othertitle'),
			'author' => $this->input->post('author'),
			'other_author' => $this->input->post('otherauthor'),
			'publisher' => $this->input->post('publisher'),
			'edition' => $this->input->post('edition'),
			'publication_year' => $this->input->post('publicationyear'),
			'category' => $this->input->post('category'),
			'description' => $this->input->post('description'),
			'abstract' => $this->input->post('abstract'),
			);
		$this->book_model->book_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}



}
