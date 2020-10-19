<?php
  include "header.php"
?>

  <div class="container">
    <!-- Button to Add new book -->
    <a class="btn btn-outline-primary add-button" role="button" href="Books-adding-form.php">&#8853 New Book </a>

    <!-- Books Display -->
    <div class="row" style="margin-top:1%;">
        <?php
          include_once "includes/dbh.php";

          $sql = "SELECT * FROM books ORDER BY book_id;";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);

          if ($resultcheck > 0) {
              while ($row = mysqli_fetch_assoc($result)) {
                echo '
                <div class="col-lg-3 col-md-4 col-sm-6 " >
                  <div class="polaroid" onclick=" window.location.href = \'details-page.php?id='.$row["book_id"].' \';">
                    <img src="Book-images/'.$row["image_name"].'" alt="Book-Image">
                    <div class="image-text">
                      <h6 >'.$row["book_name"].'</h6>
                      <sub>Book by '.$row["author_name"].'</sub>
                    </div>
                  </div>
                </div>
                ';
              }
          }
         ?>

         <!------------- Sample Books --------------->

         <div class="col-lg-3 col-md-4 col-sm-6" >
           <div class="polaroid image" >
             <img src="Book-images/sample-image.jpeg" alt="Book-Image">
             <div class="image-text">
               <h6>Sample Name</h6>
               <sub>Book by Author Name</sub>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6" >
           <div class="polaroid image" >
             <img src="Book-images/sample-image.jpeg" alt="Book-Image">
             <div class="image-text">
               <h6>Sample Name</h6>
               <sub>Book by Author Name</sub>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6" >
           <div class="polaroid image" >
             <img src="Book-images/sample-image.jpeg" alt="Book-Image">
             <div class="image-text">
               <h6>Sample Name</h6>
               <sub>Book by Author Name</sub>
             </div>
           </div>
         </div>


    </div>
  </div>
</body>

</html>
