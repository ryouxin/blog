<?php

class User_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->set_table('user');
        $this->load->driver('cache', array('adapter' => 'file'));
    }
    public $ADMIN_SALT = 'iiiiii';

}
