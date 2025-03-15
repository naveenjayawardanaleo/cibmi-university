<?php

class Migration_product_option_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "ProductOptionId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "ProductId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "OptionId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "Price" => [
                'type' => 'DOUBLE'
            ],
            "Qty" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "DiscountType" => [
                'type' => 'INT',
                'constraint' => 1
            ],
            "DiscountValue" => [
                'type' => 'DOUBLE'
            ],
            "DsiscountExpireDate" => [
                'type' => 'DATE'
            ],
            "CreatedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
              'type' => 'TIMESTAMP'
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
        $this->dbforge->add_key('ProductOptionId', TRUE);
        $this->dbforge->create_table('product_option', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('product_option', TRUE);
    }

}