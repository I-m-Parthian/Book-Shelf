<?php
  require 'dbh.php';

  if(isset($_POST['submit'])){
    $user = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $retypedPassword = $_POST['retyped'];

    if(empty($user)||empty($email)||empty($password)||empty($retypedPassword)) {
      header('Location: ../userSignup.view.php?signup=fail');
      exit();
    }
    else{
      if($password!=$retypedPassword){
        header('Location: ../userSignup.view.php?password=fail');
        exit();
      }
      $sql = "INSERT INTO users(
        user_email, user_name, user_role, passwrd)
        VALUES ('$email','$user','Reader','$password')";

      $result=mysqli_query($conn,$sql);

      if(isset($result)){
        header('Location: ../userSignup.view.php?signup=success');
      }
    }
  }
  else{
    header('Location: ../userSignup.view.php?signup=fail');
  }
 ?>
