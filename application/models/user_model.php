<?php

class User_model extends CI_Model
{
    //var $id = "";
    var $name = "";
    var $password = "";
    
    function get_users()
    {
        $this->load->database();
        $query = $this->db->get('users'); //Ange tabell dom ligger i
        return $query->result();        
    }
    
    
    
    
}


?>