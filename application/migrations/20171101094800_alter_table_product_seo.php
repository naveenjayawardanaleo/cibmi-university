<?php

class Migration_Alter_table_product_seo extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "MetaKeywords" => [
                'type' => 'TEXT'
            ],
            "SeoDescription" => [
                    'type' => 'TEXT'
             ],
            "Weight" => [
                    'type' => 'DOUBLE'
            ],
            "Type" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];

        $this->dbforge->add_column('product', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('product', 'MetaKeywords');
        $this->dbforge->drop_column('product', 'SeoDescription');
        $this->dbforge->drop_column('product', 'Weight');
        $this->dbforge->drop_column('product', 'Type');
    }

}