<?php

class Migration_customer_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "CustomerId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "FirstName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "LastName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Email" => [
                'type' => 'TEXT'
            ],
            "MobileNumber" => [
                'type' => 'TEXT'
            ],
            "LandPhoneNumber" => [
                'type' => 'TEXT'
            ],
            "Password" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Address1" => [
                'type' => 'TEXT'
            ],
            "Address2" => [
                'type' => 'TEXT'
            ],
            "CountryId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CityId" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "CreatedDate" => [
                'type' => 'DATETIME'
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
        $this->dbforge->add_key('CustomerId', TRUE);
        $this->dbforge->create_table('customer', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('customer', TRUE);
    }

}