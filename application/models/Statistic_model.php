<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statistic_model extends CI_Model {

	public $provinsi = "provinsi";
	public $kabupaten = "kabupaten";

	public function __construct()
	{
		parent::__construct();
		
	}

	public function getProvinsiAll()
	{
		$this->db->select('*');
		$this->db->from($this->provinsi);
		$this->db->order_by('id_provinsi', 'ASC');
		// $this->db->where($where);
		return $this->db->get();
	}
	public function getProvinsi($where)
	{
		$this->db->select('*');
		$this->db->from($this->provinsi);
		$this->db->where($where);
		return $this->db->get();
	}
	public function insertProvinsi($data)
	{
		return $this->db->insert($this->provinsi, $data);
	}
	public function update_Provinsi($where, $data)
	{
		$this->db->where($where);

		return $this->db->update($this->provinsi, $data);;
	}
	public function get_data_kabupaten($table){
		return $this->db->get($table)->result();
	}
	public function insertstatistickab($table,$data){
		return $this->db->insert($table,$data);
	}
	public function deletedatakab($where,$table){
		$this->db->where($where);
		return $this->db->delete($table);
	}
	public function show_edit_data($where,$table){
		return $this->db->get_where($table,$where)->result();
	}
	public function updatedatakab($where,$data,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	public function get_data_provinsi($table){
		return $this->db->get($table)->result();
	}
	public function tampil_data_edit_prov($where, $table){
		return $this->db->get_where($table, $where)->result();
	}
	public function updateprovinsi($data, $where, $table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
	public function tampil_media($table){
		return $this->db->get($table)->result();
	}
	public function tambah_data_media($data, $table){
		return $this->db->insert($table,$data);
	}
	public function hapus_data_media($where, $table){
		$this->db->where($where);
		return $this->db->delete($table);
	}
	public function show_data_media($where, $table){
		return $this->db->get_where($table, $where)->result();
	}
	public function edit_data_media($data,$where,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}

}

/* End of file Statistic_model.php */
/* Location: ./application/models/Statistic_model.php */