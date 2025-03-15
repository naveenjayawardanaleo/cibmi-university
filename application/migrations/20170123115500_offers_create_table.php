<?php

class Migration_Offers_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "OfferId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "CategoryId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "BrandId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "SubCategoryId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "OfferProductTitle" => [
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
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "MoreImage" => [
                'type' => 'TEXT'
            ],
            "Document" => [
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
        $this->dbforge->add_key('OfferId', TRUE);
        $this->dbforge->create_table('offer', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('offer', TRUE);
    }

}