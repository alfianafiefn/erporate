<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_waiters extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_order()
    {
        $result = $this->db->query("SELECT * 
                                    FROM restaurant.tb_user ");
        return $result->result_array();
    }

    function get_no_invoice(){
        $result = $this->db->query("SELECT RIGHT(invoice,3) as kode FROM restaurant.tb_order ORDER BY invoice DESC LIMIT 1");
        if($result->num_rows() <> 0){
            $data = $result->row();      
            $kode = intval($data->invoice) + 1;
            return $kode;
        }else{
            return 1;
        }
    }
}

