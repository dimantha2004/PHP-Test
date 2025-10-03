<?php

class Blog_List_Add_Update 
{ 
    private $id;
    private $main_user_login_id;
    private $ast="1";
    private $sdt;
    private $heading;
    private $information_data;
    private $image_path;
    private $url_data;  
    private $key_words;
    private $seo_dis;
    private $is_pic_available ="0";
    private $sql_update_query;

    public function __construct($get_main_user_login_id)
    {
        $this->main_user_login_id = $get_main_user_login_id;
        $this->sdt = date('Y-m-d H:i:s');
    }

    public function set_data($get_information_data,$get_heading,$get_seo_dis,$get_url_data,$get_key_words,$get_image_path)

    {
     $this->information_data = $get_information_data;
     $this->heading = $get_heading;  
     $this->seo_dis = $get_seo_dis;
     $this->url_data = $get_url_data;
     $this->key_words = $get_key_words;
     $this->image_path = $get_image_path;
     $this->sql_update_query .= ",information_data='$this->information_data',heading='$this->heading',seo_dis='$this->seo_dis',url_data='$this->url_data',key_words='$this->key_words'"; 
    }

    public function set_information_data($get_information_data)
    {
     $this->information_data = $get_information_data; 
     $this->sql_update_query = ",information_data=" .$this->information_data; 
    }

    public function set_heading($get_heading)
    {
     $this->heading = $get_heading;  
     $this->sql_update_query = $this->sql_update_query . ",heading=" .$this->heading; 
    }

    public function set_seo_dis($get_seo_dis)
    {
     $this->seo_dis = $get_seo_dis; 
     $this->sql_update_query = $this->sql_update_query . ",seo_dis=".$this->seo_dis; 
    }

    public function set_url_data($get_url_data)
    {
     $this->url_data = $get_url_data; 
     $this->sql_update_query = $this->sql_update_query . ",url_data=".$this->url_data; 
    }

    public function set_image_path($get_image_path)
    {
     $this->image_path = $get_image_path; 
     $this->sql_update_query = $this->sql_update_query . ",image_path=" .$this->image_path;
    }

    public function is_pic_available()
    {
     $this->is_pic_available = $get_is_pic_available; 
     $this->sql_update_query = $this->sql_update_query . ",is_pic_available=" .$this->is_pic_available; 
    }

    public function is_not_pic_available()
    {
     $this->is_pic_available = "0"; 
     $this->sql_update_query = $this->sql_update_query . ",is_pic_available=" .$this->is_pic_available; 
    } 

    public function remove()
    {
        $this->ast="0"
    }
    
    public function get_id()
    {
        return $this->id;
    }

    public function set_id($get_id)
    {
        $this->id = $get_id;
    }

    private $error_msg;

    public function get_error()
    {
       return $this->error_msg;
    }
    public function process_new_record()

    {
     $data_base_obj = new Database();
     $get_sql_query = "insert into blog_list(ast,sdt,heading,information_data,image_path,url_data,main_user_login_id,key_words,seo_dis,is_pic_available) values"
        . "('" . $this->ast . "','" . $this->sdt . "','" . $this->heading . "','" . $this->information_data . "','" . $this->image_path . "','" . $this->url_data . "','" . $this->main_user_login_id . "','" . $this->key_words . "','" . $this->seo_dis . "','" . $this->is_pic_available . "')";
    $data_base_obj->get_result($get_sql_query);

    $this->error_msg = $data_base_obj->get_error_state_boolean();
    $this->id = $data_base_obj -> get_id();
    return $data_base_obj -> get_error_state_boolean();
    }

   public function process_update()
    {
        $data_base_obj = new DataBase();
        $get_sql_query = "update blog_list set ast='" . $this->ast . "'" . $this->sql_update_query . " where id='" . $this->id . "'";
        $data_base_obj->get_result($get_sql_query);
        $this->error_msg = $data_base_obj->get_error_state_boolean();
        return $data_base_obj->get_error_state_boolean();
    }
}


              

