<?php

class blog_List_SINGLE_DATA_URL
{

    private $id;
    private $ast;
    private $sdt;
    private $heading;
    private $information_data;
    private $image_path;
    private $url_data;
    private $main_user_login_id;
    private $key_words;
    private $seo_dis;
    private $avble_boo = false;
    private $data_base_obj;
    private $is_pic_available = "0";

    public function __construct($get_url_data)
    {
        $this->url_data = $get_url_data;
        $this->data_base_obj = new DataBase();

        $get_sql_query = "SELECT * FROM blog_list WHERE url_data = '" . $this->url_data . "'";
        $result = $this->data_base_obj->get_result($get_sql_query);

        while ($row = $result->fetch_assoc()) {
            $this->available_boo = true;
            $this->id = $row['id'];
            $this->ast = $row['ast'];
            $this->sdt = $row['sdt'];
            $this->heading = $row['heading'];
            $this->information_data = $row['information_data'];
            $this->image_path = $row['image_path'];
            $this->main_user_login_id = $row['main_user_login_id'];
            $this->key_words = $row['key_words'];
            $this->seo_dis = $row['seo_dis'];
            $this->url_data = $row['url_data'];
            $this->is_pic_available = $row['is_pic_available'];
        }
    }
    public function is_pic_available()
    {
        return $this->is_pic_available;
    }

    public function get_state()
    {
        return $this->avble_boo;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_ast()
    {
        return $this->ast;
    }

    public function get_sdt()
    {
        return $this->sdt;
    }

    public function get_heading()
    {
        return $this->heading;
    }

    public function get_information_data()
    {
        return $this->information_data;
    }

    public function get_image_path()
    {
        return $this->image_path;
    }

    public function get_url_data()
    {
        return $this->url_data;
    }

    public function get_main_user_login_id()
    {
        return $this->main_user_login_id;
    }

    public function get_key_words()
    {
        return $this->key_words;
    }

    public function get_seo_dis()
    {
        return $this->seo_dis;
    }
}
