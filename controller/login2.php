<?php
session_start();
  if(isset($_SESSION)){
    header('Location: dashboardController.php');
  }
  else{
    if(!empty($_POST['login'])){

      $userName = filter_var($_POST["useremail"], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST["userpassword"], FILTER_SANITIZE_STRING);

      require '/opt/lampp/htdocs/BookShelf/model/login.model.php';
      $row  = validateLogin($userName,$password);

      if($row!==0){
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['user_email']=$row['user_email'];
        $_SESSION['user_name']=$row['user_name'];
        require 'dd.php';
        dd($_SESSION);
        header('Location: /BookShelf/views/user/dashboard.view.php');
      }
    }
  }
?>
