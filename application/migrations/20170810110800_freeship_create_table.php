<?php

class Migration_Freeship_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "FreeShipId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "Value" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "Image" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ShortDescription" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Description" => [
                'type' => 'TEXT'
            ],
            "MoreImage" => [
                'type' => 'TEXT'
            ],
            "CreatedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
                'type' => 'DATETIME'
            ],
            "ModifiedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ModifiedDate" => [
                'type' => 'TIMESTAMP'
            ],
            "IsDeleted" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ],
            "Order" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('FreeShipId', TRUE);
        $this->dbforge->create_table('freeship', TRUE);


        $this->db->insert_batch('freeship',
            [
                [
                    'FreeShipId' => '1',
                    'Value' => 100,
                    'Image' => '',
                    'ShortDescription' => '',
                    'Description' => '',
                    'MoreImage' => 'null',
                    'CreatedBy' => '1',
                    'CreatedDate' => date("Y-m-d H:i:s"),
                    'ModifiedBy' => '1',
                    'ModifiedDate' => date("Y-m-d H:i:s"),
                    'IsDeleted' => '0',
                    'Order' => '0'
                ]
            ]
        );


    }

    public function down()
    {
        $this->dbforge->drop_table('freeship', TRUE);
    }

}