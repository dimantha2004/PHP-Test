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
     $this->sql_update_query = ",information_data='$this->information_data'"; 
    }

    public function set_heading($get_heading)
    {
     $this->heading = $get_heading;  
     $this->sql_update_query = $this->sql_update_query . ",heading='$this->heading'"; 
    }

    public function set_seo_dis($get_seo_dis)
    {
     $this->seo_dis = $get_seo_dis; 
     $this->sql_update_query = $this->sql_update_query . ",seo_dis='$this->seo_dis'"; 
    }

    public function set_url_data($get_url_data)
    {
     $this->url_data = $get_url_data; 
     $this->sql_update_query = $this->sql_update_query . ",url_data='$this->url_data'"; 
    }

    public 

}


              

