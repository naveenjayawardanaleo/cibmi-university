<?php
class Clients_model extends CI_Model
{
    var $_table = "clients",
        $primary_key = "ClientsId";

    function __construct()
    {
        parent::__construct();
    }
    // function order_summary_insert()
    // {

    //     $data = array(
    //         'ClientsId' => '',
    //         'FirstName' => $FirstName,
    //         'LastName' => $LastName
    //     );

    //     $this->db->insert('clients', $data);
    // }

    public function email_checking($Email)
    {
        $query = $this->db->get_where('clients', array('Email' => $Email));

        return $query->row_array();
    }






    public function edit_checking($emailchk)
    {
        $query = $this->db->get_where('clients', array('Email' => $emailchk));

        return $query->row_array();
    }

    public function register($FirstName, $LastName, $Email, $Nic, $MobileNumber, $SecondNumber, $Password, $Address)
    {
        $data = array(
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'Email' => $Email,
            'Nic' => $Nic,
            'MobileNumber' => $MobileNumber,
            'SecondNumber' => $SecondNumber,
            'Password' => $Password,
            'Address' => $Address,

        );


        $query = $this->db->insert('clients', $data);
        // if($query){
        // $this->session->set_flashdata('success','Registration successfull, Now you can login.');	
        // redirect('My-Account');
        // } else {
        // $this->session->set_flashdata('error','Something went wrong. Please try again.');	
        // redirect('register');	
        // }

    }

    public function login_checking($Email, $Password)
    {
        $query = $this->db->get_where('clients', array('Email' => $Email, 'Password' => $Password));

        return $query->row_array();
    }

    public function clientId_checking($ClientsId)
    {
        $query = $this->db->get_where('clients', array('ClientsId' => $ClientsId));

        return $query->row_array();
    }



    public function checkupdate($Email, $Password)
    {
        $data = array(

            'Email' => $Email,

            'Password' => $Password,

        );


        $query = $this->db->update('clients', $data);
    }
    public function get_clients_order()
    {


        
        $this->db->where('IsDeleted', 0);
        // $this->db->order_by('Order', 'ASC');
        $data = $this->db->get('clients');
        return $data->result();
    }
}
