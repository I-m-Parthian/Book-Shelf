<?php

  function validateLogin($userName,$password){
    $answer = array();
    $sql = "SELECT * FROM users WHERE user_email LIKE '$userName' ";
    require '/opt/lampp/htdocs/BookShelf/model/dbh.php';
    $result = mysqli_query($conn, $sql);
    $resultcheck = mysqli_num_rows($result);
    if($resultcheck > 0){
      $row = mysqli_fetch_assoc($result);
      if(!strcmp($password,$row['password'])) {
        $_SESSION['user_id']= $row['user_id'];
        return $row;
      }
    }
    return 0;
  }
 ?>
