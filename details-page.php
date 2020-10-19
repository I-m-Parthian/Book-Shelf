<?php
  include "header.php"
?>

  <div class="container">
    <!-- Button to Add new book -->
    <div class="buttons">
      <a class="btn btn-outline-primary back-button" role="button" href="index.php">◀️ Back</a>
      <a class="btn btn-outline-primary add-button" role="button" href="Books-adding-form.php">&#8853 New Book </a>
    </div>
    <?php
      include_once "includes/dbh.php";

      $sql = "SELECT * FROM books where book_id=".$_GET["id"];

      $result = mysqli_query($conn, $sql);
      $resultcheck = mysqli_num_rows($result);

      if ($resultcheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo '
              <div class="container" style="margin-top=1%">
                    <h1 >'.$row["book_name"].'</h1>
                    <img src="Book-images/'.$row["image_name"].'" alt="Book-Image" style="text-align:right">
                    <sub>Book by '.$row["author_name"].'</sub>
                    <p>'.$row["book_description"].'<p>
              </div>
              ';
            }
        }
        mysqli_close($conn);

      ?>
</body>

</html>
