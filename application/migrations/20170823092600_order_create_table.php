<?php

class Migration_Order_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "OrderId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "ReceiptNo" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CustomerId" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "FirstName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "LastName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Address1" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Address2" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CountryId" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CityId" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Cart" => [
                'type' => 'TEXT'
            ],
            "CartTotal" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CouponDiscountType" => [
                'type' => 'INT',
                'constraint' => 1
            ],
            "CouponValue" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CouponCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "VoucherCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "VoucherNumber" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "VoucherValue" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "DeliveryCost" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreditCardType" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreditCardHolderName" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreditCardNumber" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreditCardExpiry" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "CreditCardSecureId" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ],
            "ResponseCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ResponseText" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "TxtReference" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "AuthCode" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "OrderDate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "OrderType" => [
                'type' => 'INT',
                'constraint' => 11
            ],
            "ConvenienceRate" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "ConvenienceValue" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "Dispatch" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ],
            "DispatchedDate" => [
                'type' => 'TIMESTAMP'
            ],
            "IsDeleted" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('OrderId', TRUE);
        $this->dbforge->create_table('order', TRUE);





    }

    public function down()
    {
        $this->dbforge->drop_table('order', TRUE);
    }

}