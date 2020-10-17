<?php
  include_once "includes/dbh.php";

  $sql = "SELECT * FROM books ORDER BY book_id;";
  $result = mysqli_query($conn, $sql);
  $resultcheck = mysqli_num_rows($result);

  if ($resultcheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<h1>$row['book_name']</h1>";
      }
    }
