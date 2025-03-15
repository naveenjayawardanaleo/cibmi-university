<?php

class Migration_Add_new_advertisement_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $this->db->insert_batch('advertisement',
            [
                [

                    'AddTitle' => 'Special Offers Page Banner',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ] ,
                [

                    'AddTitle' => 'Deals Page Banner',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'AddTitle' => 'Brands Page Banner',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [

                    'AddTitle' => 'Gift Vouchers Page Banner',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ] ,
                [

                    'AddTitle' => 'New Arrivals Page Banner',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ]


            ]
        );

    }

    public function down()
    {

    }

}