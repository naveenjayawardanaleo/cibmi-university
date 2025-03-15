<?php

class Migration_Alter_table_order extends CI_Migration
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
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => FALSE,
            ],
            "Comment" => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ],
            "Cancel" => [
                'type' => 'INT',
                'constraint' => 1,
                'default' => 0
            ],
            "CommentCancel" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "MobileNo" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            "TelephoneNo" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];

        $this->dbforge->add_column('order', $fields);

    }

    public function down()
    {
        $this->dbforge->drop_column('order', 'DeliveryId');
        $this->dbforge->drop_column('order', 'Comment');
        $this->dbforge->drop_column('order', 'Cancel');
        $this->dbforge->drop_column('order', 'CommentCancel');
        $this->dbforge->drop_column('order', 'MobileNo');
        $this->dbforge->drop_column('order', 'TelephoneNo');
    }

}