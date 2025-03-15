<?php
class Partners_model extends CI_Model
{
	var $_table = "partners",
		$primary_key = "PartnerId";

	function __construct()
	{
		parent::__construct();
	}
	public function insert_partners($post){
		return $this->db->insert('partners', $post);
	}
	public function get_partners(){
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('PartnerId', 'DESC');
		$data = $this->db->get('partners');
		return $data->result();
	}
	public function get_partners_details($partner_id){
		$this->db->where('PartnerId', $partner_id);
		$data = $this->db->get('partners');
		return $data->row();
	}
	public function update_partners($partner_id, $post){
		$this->db->where('PartnerId', $partner_id);
		return $this->db->update('partners', $post);
	}
	public function get_partners_order(){
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('Order', 'ASC');
		$data = $this->db->get('partners');
		return $data->result();
	}
}