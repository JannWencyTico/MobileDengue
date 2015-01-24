<?php

Class Login_model extends CI_Model
{

    function login($username, $password, $name )
    {
        $this -> db -> select('account_id, username, password, name, mobilenum');
        $this -> db -> from('account');
        $this -> db -> where('username', $username);
        $this -> db -> where('name', $name);
        $this -> db -> where('password', $password);


        $this -> db -> limit(1);

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }
    }

}

?>