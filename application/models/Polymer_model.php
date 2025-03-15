<?php
class Polymer_model extends CI_Model
{
	var $_table = "polymer",
		$primary_key = "PolymerId";

	function __construct()
	{
		parent::__construct();
	}

	public function get_all($limit = 0)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('IsDeleted', FALSE);
		if($limit > 0){
			$this->db->limit($limit);
		}
		$data = $this->db->get();
		return $data->result();
	}

	public function get_all_by_order($limit = 0){
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('IsDeleted', FALSE);
		$this->db->order_by('Order','ASC');
		if($limit > 0){
			$this->db->limit($limit);
		}
		$data = $this->db->get();
		return $data->result();
	}

	public function get($id)
	{
		$this->db->where($this->primary_key, $id);
		$data = $this->db->get($this->_table);
		return $data->row();
	}

	public function get_by($where)
	{
		$this->db->select('*');
		$this->db->where($where);
		$this->db->where('IsDeleted', FALSE);
		$data = $this->db->get($this->_table);
		return $data->result();
	}

	public function get_all_per_page($per_page = 0, $page = 0){
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('IsDeleted', FALSE);
		$this->db->order_by('Order','ASC');
		$this->db->limit($per_page, ($page - 1) * $per_page);
		$data = $this->db->get();
		return $data->result();
	}

	public function insert($post)
	{
		$this->db->insert($this->_table, $post);
		return $this->db->insert_id();
	}

	public function update($id, $post)
	{
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->_table, $post);
	}

	public function delete($id)
	{
		$this->db->where($this->primary_key, $id);
		return $this->db->update($this->_table, array('IsDeleted' => TRUE));
	}
}
