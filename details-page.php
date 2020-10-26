<?php
  include "header.php"
?>

  <div class="container">
    <!-- Button to Add new book -->
    <div class="buttons">
      <a class="btn btn-outline-primary back-button" role="button" href="index.php">◀️ Back</a>
      <a class="btn btn-outline-primary" role="button" href="Books-adding-form.php">&#8853 New Book </a>
    </div>
    <?php
      if(isset($_GET['book_id'])) {

        include_once "includes/dbh.php";
        // Fetching data on the basis of book_id
        $sql = "SELECT * FROM books where book_id=".$_GET["book_id"];

        $result = mysqli_query($conn, $sql);
        $resultcheck = mysqli_num_rows($result);

        if ($resultcheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo '
                <div class="container" style="margin-top=1%">
                        <h2 class="title-text">'.$row["book_name"].'</h2>
                        <img src="Book-images/'.$row["image_name"].'" class="title-image" alt="Book-Image" style="height:300px;width:200px;">
                        <h6 class="title-text"><i>Book by '.$row["author_name"].'</i></h6>
                        <p class="text-monospace title-text"><strong>Description:</strong>'.$row["book_description"].'<p>

                </div>
                ';
              }
          }
          mysqli_close($conn);
      }
      else if(isset($_GET['upload'])) {
        // Redirected from Form page
        // Therefore using git to fetch data
        $bookName = $_GET['book_name'];
        $authorName = $_GET['author_name'];
        $desciption = $_GET['book_description'];
        $imageName = $_GET['image_name'];

        echo '
          <div class="container" style="margin-top=1%">
                <h1 >'.$bookName.'</h1>
                <img src="Book-images/'.$imageName.'" class="title-image" alt="Book-Image">
                <sub>Book by '.$authorName.'</sub>
                <p>'.$desciption.'<p>
          </div>
          ';

      }
      else{
        echo '
          <div class="container" style="margin-top=1%">
                <h1 >Book Name</h1>
                <img src="Book-images/gallery_3.jpg" class="title-image" alt="Book-Image">
                <p><sub>Book by Author Name</sub></p>
                <p><i>Description:</i> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
          </div>
          ';
      }

      ?>
</body>

</html>
