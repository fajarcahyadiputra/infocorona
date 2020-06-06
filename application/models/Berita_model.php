<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Berita_model extends CI_Model {

	public $table = 'berita';

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

	public function getAll()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		return $this->db->get();
	}
	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}
	public function update($where, $data)
	{
		$this->db->where($where);

		return $this->db->update($this->table, $data);
	}
	public function hapus($where)
	{
		$this->db->where($where);
		return $this->db->delete($this->table);
	}

}

/* End of file Berita_model.php */
/* Location: ./application/models/Berita_model.php */