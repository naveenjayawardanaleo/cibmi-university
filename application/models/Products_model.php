<?php

class Products_model extends CI_Model

{


	// new for home page 
	public function get_all_by_order($limit = 0)
	{
		$this->db->select('*');
		$this->db->from($this->_table);
		$this->db->where('IsDeleted', FALSE);
		$this->db->order_by('Order', 'ASC');
		if ($limit > 0) {
			$this->db->limit($limit);
		}
		$data = $this->db->get();
		return $data->result();
	}

	var $_table = "products",

		$primary_key = "ProductId";



	function __construct()

	{

		parent::__construct();
	}

	public function insert_product($post)
	{

		return $this->db->insert('products', $post);
	}

	public function get_products_list()
	{

		// $this->db->where('IsDeleted', 0);

		// $data = $this->db->get('products');

		// return $data->result();

		$this->db->select('* , products.Image');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.IsDeleted', 0);

		$this->db->where('category.IsDeleted', 0);

		$this->db->order_by('products.ProductId', 'desc');

		$data = $this->db->get();


		return $data->result();
	}

	public function get_products_details($id)
	{

		$this->db->where('ProductId', $id);

		$data = $this->db->get('products');

		return $data->row();
	}

	public function update_products($product_id, $post)
	{

		$this->db->where('ProductId', $product_id);

		return $this->db->update('products', $post);
	}

	public function get_totol_count($category_id)
	{

		$this->db->where('CategoryId', $category_id);

		$this->db->where('IsDeleted', 0);

		$data = $this->db->get('products');

		return $data->num_rows();
	}

	public function get_product_with_limit($category_id, $per_page,  $page)
	{

		// $this->db->where('CategoryId', $category_id);

		// $this->db->limit($per_page, ($page - 1) * $per_page);

		// $data = $this->db->get('products');

		// return $data->result();

		// $this->db->select('*, products.Image');


		// my new 
		$this->db->select('products.*, products.Image');
		// query

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.CategoryId', $category_id);
		$this->db->where('products.IsDeleted', 0);

		$this->db->limit($per_page, ($page - 1) * $per_page);

		$data = $this->db->get();

		return $data->result();
	}

	public function get_products_details_home($id)
	{

		$this->db->select('products.* , products.Image, category.CategoryId, category.CategoryTitle');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.ProductId', $id);

		$data = $this->db->get();

		return $data->row();

		// $this->db->where('category.IsDeleted', 0);



	}

	public function related_products($CategoryId, $id)
	{

		$this->db->select('products.* , products.Image, category.CategoryId, category.CategoryTitle');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.IsDeleted', 0);

		$this->db->where('category.IsDeleted', 0);

		$this->db->where('products.CategoryId', $CategoryId);

		$this->db->where('products.ProductId!=', $id);

		$this->db->order_by('id', 'RANDOM');

		$this->db->limit(4);

		$data = $this->db->get();

		return $data->result();
	}


	public function get_prodcuts_by_search($search)
	{

		$this->db->select('products.* , products.Image, category.CategoryId, category.CategoryTitle');

		$this->db->from('products');

		$this->db->join('category', 'category.CategoryId=products.CategoryId');

		$this->db->where('products.IsDeleted', 0);

		$this->db->where('category.IsDeleted', 0);

		$this->db->like('category.CategoryTitle', $search);

		$this->db->or_like('products.ProductTitle', $search);

		$this->db->limit(10);

		$data = $this->db->get();

		return $data->result();
	}

	// public function get_testemonial_list(){

	// }
	public function get_products_order()
	{
		$this->db->where('IsDeleted', 0);
		$this->db->order_by('Order', 'ASC');
		$data = $this->db->get('products');
		return $data->result();
	}
	public function search($search)
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->like('ProductTitle', $search);
		$this->db->or_like('sku', $search);
		// $this->db->or_like('lname', $search);
		// $this->db->or_like('mname', $search);
		$query = $this->db->get();
		return $query->result();
	}

	public function get_quotation_data($clientId){
	



		$this->db->select('*');

		$this->db->from('products');

		$this->db->join('quotation', 'quotation.ProductId=products.ProductId');

		$this->db->where('products.IsDeleted', 0);

		$this->db->where('quotation.IsDeleted', 0);

		$this->db->order_by('products.ProductId', 'ASC');

		$data = $this->db->get();


		return $data->result();
	}
}
