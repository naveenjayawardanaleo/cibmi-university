<?php
class Gallery_model extends CI_Model
{
	var $_table = "galley",
		$primary_key = "GalleryId";

	function __construct()
	{
		parent::__construct();
	}
	public function insert_gallery($post){
		return $this->db->insert('galley', $post);
	}
	public function get_gallery_list(){
		$this->db->where('IsDeleted', 0);
		$data = $this->db->get('galley');
		return $data->result();
	}
	public function get_gallery_details($gellery_id){
		$this->db->where('GalleryId', $gellery_id);
		$data = $this->db->get('galley');
		return $data->row();
	}
	public function update_gallery($gallery_id, $post){
		$this->db->where('GalleryId', $gallery_id);
		return $this->db->update('galley', $post);
	}
	public function get_gallery_from_order(){
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('Order', 'ASC');
		$data = $this->db->get('galley');
		return $data->result();
	}
	public function get_all_gallery(){
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('Order', 'ASC');
		$data = $this->db->get('galley');
		return $data->result();
	}
}