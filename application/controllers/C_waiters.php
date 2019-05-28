<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_waiters extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function order()
	{
        $data['order'] = $this->M_waiters->get_order();
		$this->load->view('waiters/V_order',$data);
	}

    public function page_order(){
        $data['category'] = $this->M_manager->get_category();
        $last_num         = $this->M_waiters->get_no_invoice();
        $data['invoice']  = "ERP".date('dmY')."-".str_pad($last_num, 3, "0", STR_PAD_LEFT);
        $this->load->view('waiters/V_new_order',$data);
    }

}
