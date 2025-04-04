<?php

class Migration_On_sale_products_create_table extends CI_Migration{

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "OnSaleProductId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "ProductId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedBy" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
                'type' => 'DATETIME',
                'default' => '0000-00-00 00:00:00',
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
        $this->dbforge->add_key('OnSaleProductId', TRUE);
        $this->dbforge->create_table('on_sale_product', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('on_sale_product', TRUE);
    }

}