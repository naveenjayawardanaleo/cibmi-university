<?php

class Migration_Advertisement_data_insert extends CI_Migration
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

                    'AddTitle' => 'banner 01',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ] ,
                [

                    'AddTitle' => 'banner 02',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'AddTitle' => 'banner 03',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [

                    'AddTitle' => 'banner 04',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ] ,
                [

                    'AddTitle' => 'LATEST DEALS',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'AddTitle' => 'NEW ARRIVALS IN',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [

                    'AddTitle' => 'TOP SELLERS IN',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ] ,
                [

                    'AddTitle' => 'banner 05',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'AddTitle' => 'banner 06',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'AddTitle' => 'SPECIAL PRODUCTS',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0'
                ],
                [
                    'AddTitle' => 'Sub Pages Banner',
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