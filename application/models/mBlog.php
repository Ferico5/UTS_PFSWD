<?php 

class mBlog extends CI_Model {
    function getData() {
        $this->db->order_by('tanggal_blog', 'DESC');
        $result = $this->db->get("blog");
        return $result->result_array();
    }
}

?>