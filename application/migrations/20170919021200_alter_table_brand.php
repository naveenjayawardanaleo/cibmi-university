<?php

class Migration_Alter_table_brand extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "BImage" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];

        $this->dbforge->add_column('brand', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('brand', 'BImage');
    }

}