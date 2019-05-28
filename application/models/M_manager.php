<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_manager extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_category(){
        $result = $this->db->query("SELECT * FROM restaurant.tb_food_category order by food_category_id asc");
        return $result->result_array();   
    }

    function add_menu($title,$price,$desc,$image,$stats,$category)
    {
        $result = $this->db->query("INSERT INTO restaurant.tb_food (name,price,files,desc_,stats,food_category_id)
                                    VALUES ('$title','$price','$image','$desc','$stats','$category')");
        return;
    }

    function show_menu($id=FALSE,$cat = FALSE){
        if($id==FALSE){$where="";}else{$where="where food_id='$id'";}
        if($cat==FALSE){$where2="";}else{$where2="where food_category_id='$cat'";}
        $result = $this->db->query("SELECT * FROM restaurant.tb_food $where $where2 ORDER BY food_id ASC");
        return $result->result();
    }

    function delete_menu($id){
        $result = $this->db->query("DELETE FROM restaurant.tb_food WHERE food_id='$id'");
        return;
    }

    function edit_menu($title,$price,$desc,$image = FALSE ,$category,$id){
        if($image==FALSE){$edit="";}else{$where=",files='$image'";}
        $result = $this->db->query("UPDATE restaurant.tb_food SET name='$title', price='$price', food_category_id='$category', desc_='$desc' $image WHERE food_id='$id'");
        return;   
    }

    function show_menu_json($a){
        $result = $this->db->query("SELECT * FROM restaurant.tb_food WHERE name like '%$a%'");
        return $result->result(); 
    }
}

