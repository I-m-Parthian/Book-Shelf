<?php
  include "header.php"
?>

<body>
  <?php require 'navigationBar.php' ?>
  <div class="container">

    <!-- Books Display -->
    <div class="row" style="margin:1% 0;">
        <?php
          include_once "includes/dbh.php";

          $sql = "SELECT * FROM books ORDER BY book_id;";
          $result = mysqli_query($conn, $sql);
          $resultcheck = mysqli_num_rows($result);
          // Fetching data from database
          if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '
              <div class="col-lg-3 col-md-4 col-sm-6 box" >
                <div class="polaroid" onclick=" window.location.href = \'details-page.php?book_id='.$row["book_id"].' \';">
                  <img class="box-image" src="Book-images/'.$row["image_name"].'" alt="Book-Image">
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

         <div class="col-lg-3 col-md-4 col-sm-6 box" >
           <div class="polaroid" onclick="window.location.href ='details-page.php'">
             <img class="box-image" src="Book-images/sample-image.jpeg" alt="Book-Image">
             <div class="image-text">
               <h6>Sample Name</h6>
               <sub>Book by Author Name</sub>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 box" >
           <div class="polaroid" onclick="window.location.href ='details-page.php'">
             <img class="box-image" src="Book-images/sample-image.jpeg" alt="Book-Image">
             <div class="image-text">
               <h6>Sample Name</h6>
               <sub>Book by Author Name</sub>
             </div>
           </div>
         </div>

         <div class="col-lg-3 col-md-4 col-sm-6 box" >
           <div class="polaroid" onclick="window.location.href ='details-page.php'">
             <img class="box-image" src="Book-images/sample-image.jpeg" alt="Book-Image">
             <div class="image-text">
               <h6>Sample Name</h6>
               <sub>Book by Author Name</sub>
             </div>
           </div>
         </div>
    </div>
  </div>
  <?php require 'footer.php'; ?>
</body>

</html>
