<?php

Class Login_model extends CI_Model
{
<<<<<<< HEAD
 function login($username, $password, $lastname)
 {
   $this -> db -> select('acount_id, username, password, lastname');
   $this -> db -> from('account');
   $this -> db -> where('username', $username);
   $this -> db -> where('lastname', $lastname);
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
=======
    function login($username, $password, $lastname, $firstname)
    {
        $this -> db -> select('*');
        $this -> db -> from('account');
        $this -> db -> where('username', $username);
        $this -> db -> where('password', $password);
        $this -> db -> where('lastname', $lastname);
        $this -> db -> where('firstname', $firstname);
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
>>>>>>> 94740730fa4da50a32c46b0b2f60236d46e3be69
}

?>