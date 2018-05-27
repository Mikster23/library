<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//This is the Book Model for CodeIgniter CRUD using Ajax Application.
class Opac_model extends CI_Model
{

	var $table = 'books';


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


public function get_all_books()
{
$this->db->from('books');
$query=$this->db->get();
return $query->result();
}



}
