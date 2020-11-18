<?php

session_start();

//load Kelas
spl_autoload_register(function($class){
  require_once 'classes/'.$class.'.php';
});

$user = new User();

 ?>
