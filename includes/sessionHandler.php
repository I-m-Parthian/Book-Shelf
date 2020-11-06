<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    $_SESSION['role'] = $role;
    $_SESSION['loggedIn'] = true;
  }

  header("Location: ../bookList.view.php?username=$username");
 ?>
