<?php

class Migration_voucher_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "VoucherId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "VoucherTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "VoucherCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "VoucherNumber" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "VoucherValue" => [
                'type' => 'DOUBLE'
            ],
            "VoucherExpireDate" => [
                'type' => 'DATE'
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
        $this->dbforge->add_key('VoucherId', TRUE);
        $this->dbforge->create_table('voucher', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('voucher', TRUE);
    }

}