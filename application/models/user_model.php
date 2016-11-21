
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function getUsers()
    {
        $query = $this->db->get('users');
        return $query->result();
    }

    function getUserById($id)
    {
        $this->db->where('uid', $id);
        $query = $this->db->get('users');
        return $query->row();
    }

}

/* End of file User_model.php */

