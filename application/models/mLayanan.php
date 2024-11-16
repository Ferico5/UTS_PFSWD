<?php 

class mLayanan extends CI_Model {
    function getData() {
        $result = $this->db->get("layanan");
        return $result;
    }
}

?>