<?php

class Loginmodel extends CI_Model{

  public function validate_login($username, $password){
    // $query = ("SELECT * FROM users WHERE (username, password) VALUES($username, $password)");
    $query = $this->db->where(['uname'=>$username, 'pword'=>$password])
             ->get('users');
    if($query->num_rows()){
      return $query->row()->id;
    }
    else{
      return FALSE;
    }

  }

}


 ?>
