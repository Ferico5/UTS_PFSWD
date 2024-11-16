<?php 

class Blog extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("mBlog");
    }

    function index() {
        $data["data"] = $this->mBlog->getData();
        $this->load->view("view_blog",$data);
    }
}


?>