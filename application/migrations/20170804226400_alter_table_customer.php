<?php

class Migration_Alter_table_customer extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "Cart" => [
                'type' => 'TEXT'

            ],
            "WishList" => [
                'type' => 'TEXT'

            ]
        ];

        $this->dbforge->add_column('customer', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('customer', 'Cart');
        $this->dbforge->drop_column('customer', 'WishList');
    }

}