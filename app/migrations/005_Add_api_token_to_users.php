<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Add_api_token_to_users
{
    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->dbforge();
    }

    public function up()
    {
        $this->_lava->dbforge->add_column('users', [
            'api_token' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => TRUE
            ]
        ]);
    }

    public function down()
    {
        $this->_lava->dbforge->drop_column('users', 'api_token');
    }
}