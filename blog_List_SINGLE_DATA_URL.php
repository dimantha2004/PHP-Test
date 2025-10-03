<?php

class blog_List_SINGLE_DATA
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

    private $is_pic_available;

    public function __construct($id)
    {
        $this->id = $id;

        $data_base_obj = new DataBase();
        $get_sql_query = "SELECT *FROM blog_list WHERE id= '" . $this->id . "'";
        $result = $data_base_obj->get_result($get_sql_query);

        while ($row = $result->fetch_assoc()) {

            $this->ast = $row['ast'];
            $this->sdt = $row['sdt'];
            $this->heading = $row['heading'];
            $this->information_data = $row['information_data'];
            $this->image_path = $row['image_path'];
            $this->url_data = $row['url_data'];
            $this->main_user_login_id = $row['main_user_login_id'];
            $this->key_words = $row['key_words'];
            $this->seo_dis = $row['seo_dis'];
            $this->is_pic_available = $row['is_pic_available'];
        }
    }

    public function get_id()
    {
        return $this->id;
    }
    public function get_ast()
    {
        return $this->ast;
    }

    public function get_is_pic_available()
    {
        return $this->is_pic_available;
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
