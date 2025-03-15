<?php

class Migration_product_category_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "ProductId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CategoryId" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CategoryOrder" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "SubCategoryOrder" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "SecondSubCategoryOrder" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
//        $this->dbforge->add_key('CouponId', TRUE);
        $this->dbforge->create_table('product_category', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('product_category', TRUE);
    }

}