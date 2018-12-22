<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home_model extends CI_Model {

    public function tambahData($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }
}
