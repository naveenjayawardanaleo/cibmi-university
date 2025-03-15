<?php
class Orders_model extends CI_Model
{
    var $_table = "orders",
        $primary_key = "OrderId";

    function __construct()
    {
        parent::__construct();
    }

    public function my_orders($limit = 0){
        $this->db->select('*');
		$this->db->from($this->_table);
		
		
		if($limit > 0){
			$this->db->limit($limit);
		}
		$data = $this->db->get();
		return $data->result();




    }


   
}
