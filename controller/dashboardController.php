<?php
require '../authentication.php';


if($_SESSION['user_role']=='Admin'){
    header('Location: /BookShelf/views/user/adminDashboard.view.php');
}
else if($_SESSION['user_role']=='Reader'){
  header('Location: /BookShelf/views/user/readerDashboard.view.php');
}
