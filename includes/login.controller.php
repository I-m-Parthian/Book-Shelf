<?php
  include_once 'dbh.php';
  if(isset($_SESSION['loggedIn'])){
    die('hello');
    if ($_SESSION['role'] == 'Reader') {
      header("location: ../readerDashboard.php");
   } else if ($_SESSION['user_type'] == 'Admin') {
      header("location:/adminDashboard.php");
   }

  }
  if(isset($_POST['submit'])) {
    $username = $_POST['useremail'];
    $password = $_POST['userpasswrd'];
    $role = 'Admin';
    if(empty($username)||empty($password)) {
      header('Location: ../index.php?signin=fail');
    }
    else{
      // retrieving data from the users table
      $sql = 'SELECT * from users where user_email = \''.$username.'\'';
      $result = mysqli_query($conn,$sql);

      if(isset($result)) {

        $row = mysqli_fetch_assoc($result);
        if($row['password']==$password && $row['user_role']=='Admin'){
            require_once 'sessionHandler.php';

        }
        else if($row['password']==$password && $row['user_role']=='Reader'){
            header('Location: ../reader-dashboard.php');
        }
        else{
          header('Location: ../index.php?signin=fail');
        }
      }
    }
  }
  else{
    header('Location: ../index.php?signin=fail');
  }
 ?>
