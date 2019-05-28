<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('V_login');
	}

	public function login_api()
    {
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $load_user = $this->M_login->login_api($user);
        echo json_encode($load_user);
    }

    public function login_check(){
        $user = $this->input->post('user');
        $pass = $this->input->post('pass');
        $load_user = $this->M_login->login_api($user);
        if(empty($load_user)){
            echo 'empty';
        }else{
            foreach ($load_user as $data_user) {
                if($data_user['password'] != $pass){
                    echo 'wrong_pass';
                }else{
                    $data_session = array(
                        'nama' => $data_user['name'],
                        'status' => "login"
                        );

                    $this->session->set_userdata($data_session);

                    echo 'success';
                }
            }
        }
    }

    public function dashboard(){
        $this->load->view('V_dashboard');
    }

}
