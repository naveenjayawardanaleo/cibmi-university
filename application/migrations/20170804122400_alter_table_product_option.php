<?php

class Migration_Alter_table_product_option extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "ReorderLevel" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "DsiscountStartDate" => [
                'type' => 'DATE'
            ]
        ];

        $this->dbforge->add_column('product_option', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('product_option', 'ReorderLevel');
        $this->dbforge->drop_column('product_option', 'DsiscountStartDate');
    }

}