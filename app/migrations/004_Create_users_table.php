<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Create_users_table
{
    private $_lava;

    public function __construct()
    {
        $this->_lava = lava_instance();
        $this->_lava->call->dbforge();
    }

    public function up()
    {
        $this->_lava->dbforge->add_field([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => TRUE,
                'auto_increment' => TRUE
            ],

            'username' => [
                'type'       => 'VARCHAR',
                'constraint' => 100
            ],

            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],

            'created_at' => [
                'type' => 'TIMESTAMP'
            ]
        ]);

        $this->_lava->dbforge->add_key('id', TRUE);
        $this->_lava->dbforge->create_table('users');
    }

    public function down()
    {
        $this->_lava->dbforge->drop_table('users');
    }
}