<?php
class Quotation_model extends CI_Model
{
    var $_table = "quotation",
        $primary_key = "QuoId";

    function __construct()
    {
        parent::__construct();
    }

    public function addtoquotation($ClientId, $ProductId)
    {

        $data = array(
            'ClientId' => $ClientId,
            'ProductId' => $ProductId,
            'IsDeleted' => '0'



        );
        // var_dump($data); die;

        $query = $this->db->insert('quotation', $data);
        // if($query){
        // $this->session->set_flashdata('success','Registration successfull, Now you can login.');	
        // redirect('My-Account');
        // } else {
        // $this->session->set_flashdata('error','Something went wrong. Please try again.');	
        // redirect('register');	
        // }

    }
    public function remove_data_quotation_list($QuoId)
    {
        // $query = $this->db->update('quotation', array('QuoId' => $QuoId, 'IsDeleted' => '1'));

        // return $query->row_array();

        $data = array(
            'QuoId' => $QuoId,
            'IsDeleted'  => '1'
        );

        $this->db->replace('quotation', $data);


        
    }
}
