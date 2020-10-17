<?php
  include "header.php"
?>

  <div class="container">
    <!-- Button to Add new book -->
    <a class="btn btn-outline-primary add-button" role="button" href="Books-adding-form.php">&#8853 New Book </a>

    <!-- Books Display -->
    <div class="row" style="margin-top:1%;">
      <div class="col-lg-3 col-md-4 col-sm-6 bg-light" style="border: 1px solid">
        <?php
          include_once "includes/dbh.php";

          $sql = "SELECT * FROM books";
          $result = mysqli_query($conn,$sql);
          $resultcheck = mysqli_num_rows($result);

          if($resultcheck > 0 ){
            while($row = mysqli_fetch_assoc($result)){
              echo "
              <img src="" alt="Book-Image">
              <h6>'.$row["book_name"].'<sub>by '.$row["author_name"].'</sub> </h6>
            }
          }
         ?>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 bg-light" style="border: 1px solid">
        <img src="" alt="Book-Image">
        <h6>Book-Name <sub>by Author name</sub> </h6>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 bg-light" style="border: 1px solid">
        <img src="" alt="Book-Image">
        <h6>Book-Name <sub>by Author name</sub> </h6>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 bg-light" style="border: 1px solid">
        <img src="" alt="Book-Image">
        <h6>Book-Name <sub>by Author name</sub> </h6>
      </div>


    </div>
  </div>
</body>

</html>
