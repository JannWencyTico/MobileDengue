<?php
Class Login_model extends CI_Model
{
  function login($username, $password, $profile_prof_id)
  {
    $this -> db -> select('*');
    $this -> db -> from('account');
    $this -> db -> where('username', $username);
    $this -> db -> where('password', $password);
    $this -> db -> where('profile_prof_id', $profile_prof_id);

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