<?php
  include_once 'dbh.php';

  if(isset($_POST['submit'])) {
    $username = $_POST['useremail'];
    $passwrd = $_POST['userpasswrd'];
    if(empty($username)||empty($passwrd)) {
      header('Location: ../index.php?signin=fail');
    }
    else{
      // retrieving data from the users table
      $sql = 'SELECT * from users where user_email = \''.$username.'\'';
      $result = mysqli_query($conn,$sql);

      if(isset($result)) {
        //1
        $row = mysqli_fetch_assoc($result);
        if($row['passwrd']==$passwrd && $row['user_role']=='Admin'){
            header('Location: ../admin-dashboard.php');
        }
        else if($row['passwrd']==$passwrd && $row['user_role']=='Reader'){
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
