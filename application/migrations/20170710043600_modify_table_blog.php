<?php

class Migration_Modify_table_blog extends CI_Migration
{
    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $fields = array(
            'Description' => array(
                'name' => 'Description',
                'type' => 'TEXT',
            ),
        );
        $this->dbforge->modify_column('blog', $fields);
    }



}