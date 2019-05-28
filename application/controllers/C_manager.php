<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_manager extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function menu()
	{
        $data['category'] = $this->M_manager->get_category();
		$this->load->view('manager/V_menu_list',$data);
	}

    public function add_menu(){
        $title= $this->input->post('inpmenu');
        $category= $this->input->post('slccategory');
        $price= $this->input->post('inpprice');
        $desc= $this->input->post('txtdesc');

        $config['upload_path']="./assets/file_uploads/menu/";
        $config['allowed_types']='gif|jpg|png';
        $config['file_name'] = $title;
         
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $data = array('upload_data' => $this->upload->data());
            $image= $data['upload_data']['file_name']; 
             
            $result= $this->M_manager->add_menu($title,$price,$desc,$image,'1',$category);
            echo json_decode($result);
        }
    }

    public function show_menu(){
        $id = $this->input->post('id');
        if(empty($id)){
            $id = '';
        }
        $result = $this->M_manager->show_menu('',$id);
        echo json_encode($result);
    }

    public function delete_menu(){
        $id = $this->input->post('id');
        $load_data = $this->M_manager->show_menu($id,'');
        foreach ($load_data as $ld) {
            $path = './assets/file_uploads/menu/'.$ld->files;
        }
        if (unlink($path)) {
            $result= $this->M_manager->delete_menu($id);
            echo json_decode($result);
        }else{
            echo 'failed ! something wrong';
        }
    }

    public function edit_menu(){
        $title= $this->input->post('inpmenu');
        $category= $this->input->post('slccategory');
        $price= $this->input->post('inpprice');
        $desc= $this->input->post('txtdesc');
        $id= $this->input->post('inpid');

        if (empty($_FILES['file']['name'])) {
            $result= $this->M_manager->edit_menu($title,$price,$desc,'',$category,$id);
            echo json_decode($result);
        }else{
            $load_data = $this->M_manager->show_menu($id,'');
            foreach ($load_data as $ld) {
                $path = './assets/file_uploads/menu/'.$ld->files;
            }
            unlink($path);
            $config['upload_path']="./assets/file_uploads/menu/";
            $config['allowed_types']='gif|jpg|png';
            $config['file_name'] = $title;
             
            $this->load->library('upload',$config);
            if($this->upload->do_upload("file")){
                $data = array('upload_data' => $this->upload->data());
                $image= $data['upload_data']['file_name']; 
                 
                $result= $this->M_manager->edit_menu($title,$price,$desc,$image,$category,$id);
                echo json_decode($result);
            }
        }
    }

    public function show_menu_json(){
        $a = $this->input->get('key');
        $result = $this->M_manager->show_menu_json($a);
        echo json_encode($result);
    }

}
