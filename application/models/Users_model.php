<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {

	public $table = 'users';

	public function __construct()
	{
		parent::__construct();
		
	}

	public function get($where)
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($where);
		return $this->db->get();
	}

}

/* End of file Users_model.php */
/* Location: ./application/models/Users_model.php */