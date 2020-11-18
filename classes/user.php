<?php

class User{
  private $_db;

  public function __construct(){
    $this->_db = Database::getInstance();
  }

  public function register_user($fields = array()){
    if ($this->_db->insert('user', $fields)) return true;
    else return false;
  }

  public function login_user($username, $password){
    $data = $this->_db->get_info('user', 'username', $username);
    if (password_verify($password, $data['password']) )
      return true;
    else return false;
  }



}


 ?>
