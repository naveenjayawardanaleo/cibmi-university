<?php

class Migration_coupon_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "CouponId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "CouponTitle" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CouponSystemCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CouponCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CouponDiscountType" => [
                'type' => 'INT',
                'constraint' => 1
            ],
            "CouponValue" => [
                'type' => 'DOUBLE'
            ],
            "CouponExpireDate" => [
                'type' => 'DATE'
            ],
            "Image" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ShortDescription" => [
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
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('CouponId', TRUE);
        $this->dbforge->create_table('coupon', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('coupon', TRUE);
    }

}