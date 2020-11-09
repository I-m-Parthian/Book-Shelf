<?php
  session_start();

  if($_SESSION['user_role']=='Admin'){
      header('Location: /BookShelf/controller/')
  }

 ?>
