<?php 

class Layanan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("mLayanan");
    }

    function index() {
        $data["data"] = $this->mLayanan->getData();
        $this->load->view("view_layanan",$data);
    }
}


?>