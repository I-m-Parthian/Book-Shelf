<?php

  session_start();

  if (empty($_SESSION)) {
    header('Location: /BookShelf/controller/loginController.php');
  }

  // else do nothing.
