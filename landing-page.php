<?php
  include "header.php"
?>

<body>
  <h1 class="text-center text-primary">Book-Shelf</h1>
  <hr>
  <div class="container">
    <!-- Button to Add new book -->
    <div class="buttons">
      <a class="btn btn-outline-primary" role="button" href="Books-adding-form.php">&#8853 New Book </a>
    </div>

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
</body>

</html>
