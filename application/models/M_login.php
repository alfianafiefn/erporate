<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function login_api($user)
    {
        $result = $this->db->query("SELECT * 
                                    FROM restaurant.tb_user 
                                    WHERE username='$user'");
        return $result->result_array();
    }
}

