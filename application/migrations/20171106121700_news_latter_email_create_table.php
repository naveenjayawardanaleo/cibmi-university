<?php

class Migration_News_latter_email_create_table extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = [
            "NewsLetterId" => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ],
            "NewsLetter" => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ]
        ];

        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('NewsLetterId', TRUE);
        $this->dbforge->create_table('newslatter', TRUE);

    }

    public function down()
    {
        $this->dbforge->drop_table('newslatter', TRUE);
    }

}