<?php
defined('BASEPATH') OR exit('No direct script access allowed');

<<<<<<< HEAD
//This is the Book Model for CodeIgniter CRUD using Ajax Application.
class Book_model extends CI_Model
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


	public function get_by_id($id)
	{
		$this->db->from($this->table);
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}

	public function book_add($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}

	public function book_update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}


=======
class Book_model extends MY_Model
{
    public $_table = 'books';
    public $belongs_to = array(
        'categories' => array('model' => 'category_model'),
    );
    public $has_many = array(
        'reservations' => array('model' => 'reservation_model'),
    );
>>>>>>> 6a91f0b6503d61a26823c84856a05fdcf0ae19f5
}
