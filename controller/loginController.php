<?php
session_start();

if(!empty($_POST['login'])){

  $userName = filter_var($_POST["useremail"], FILTER_SANITIZE_STRING);
  $password = filter_var($_POST["userpassword"], FILTER_SANITIZE_STRING);

  require '/opt/lampp/htdocs/BookShelf/model/login.model.php';
  $row = validateLogin($userName,$password);

  if($row!==0){
    // initialize session variable
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_email'] = $row['user_email'];
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['user_role'] = $row['user_role'];
    header('Location: /BookShelf/controller/dashboardController.php');
  }
  else{
    // if login fails redirct to login view and show error message
    header('Location: /BookShelf/views/auth/login.view.php?login=fail');
  }
} else {
  // show login form
  require_once '../views/auth/login.view.php';
}
