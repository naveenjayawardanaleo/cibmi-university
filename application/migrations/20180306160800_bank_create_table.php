<?php

class Migration_bank_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "BankId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "BankName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ConvenienceRate" => [
                'type' => 'DOUBLE'
            ],
            "CProRate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CProStartDate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CProExpireDate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "DProRate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "DProStartDate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "DProExpireDate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
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
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('BankId', TRUE);
        $this->dbforge->create_table('bank', TRUE);

        $this->db->insert_batch('bank',
            [
                [
                    'BankId' => '1',
                    'BankName' => 'Sample Bank',
                    'ConvenienceRate' => '0.0',
                    'CProRate' => '0.0',
                    'CProStartDate' => '0000-00-00',
                    'CProExpireDate' => '0000-00-00',
                    'DProRate' => '0.0',
                    'DProStartDate' => '0000-00-00',
                    'DProExpireDate' => '0000-00-00',
                    'Image' => '',
                    'ShortDescription' => '',
                    'Description' => '',
                    'MoreImage' => '', //123456
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
        $this->dbforge->drop_table('bank', TRUE);
    }

}