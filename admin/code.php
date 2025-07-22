<?php
require "../config/function.php";
  if (isset($_POST['saveUser'])) {
    $name = validate($_POST['name']);
    $phone = validate($_POST['phone']);
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);
    $role = validate($_POST['role']);
    $is_ban = validate($_POST['is_ban']) == true ? 1:0;

    if ($name !='' || $email !='' || $phone !='' || $password !='') {
      # code...
    } else {
      $_SESSION['status'] = "Please fill all input fields!";
      header('Location: users-create.php');
      exit();
    }
    
  }


?>