<?php

class Migration_Project_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "ProjectId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "BrandId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CategoryId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ProjectTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "SerialNumber" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "PriceRangeTo" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "PriceRangeFrom" => [
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
            "VideoEmbedCode" => [
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
            ],
            "Color" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('ProjectId', TRUE);
        $this->dbforge->create_table('project', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('product', TRUE);
    }

}