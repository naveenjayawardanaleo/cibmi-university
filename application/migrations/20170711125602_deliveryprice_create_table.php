<?php

class Migration_deliveryprice_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "DeliveryId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "MediaComId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CountryId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CityId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "DeliveryPrice" => [
                'type' => 'DOUBLE'
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
            "FromWeight" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ToWeight" => [
                'type' => 'INT',
                'constraint' => 11
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('DeliveryId', TRUE);
        $this->dbforge->create_table('deliveryprice', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('deliveryprice', TRUE);
    }

}