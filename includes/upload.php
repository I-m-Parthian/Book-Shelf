<?php
  include_once "dbh.php";

  if(isset($_POST['submit'])){
    $bookName = $_POST['BookName'];
    $authorName = $_POST['AuthorName'];
    $desciption = $_POST['Description'];
    $file = $_FILES['ImageFile'];
    $imageName = $file['name'];

    // Check If any field remain empty
    if(empty($bookName)||empty($authorName)||empty($desciption)||empty($imageName)) {
      header('Location: ../Books-adding-form.php?upload=fail');
    exit();
    }
    else {
      // Upload details to the server
      if($_FILES['ImageFile']['error']=== 0) {

        $filedestinatn = "../Book-images/".$imageName;
        move_uploaded_file($file['tmp_name'],$filedestinatn);
        // insert data into database
        $sql = "INSERT INTO books(
          book_name, author_name, book_description, image_name)
          VALUES ('$bookName','$authorName','$desciption','$imageName')";

          $result=mysqli_query($conn,$sql);
          // redirect to details page
          if(isset($result)){
            header('Location: ../details-page.php?upload=success&book_name='.$bookName.'&author_name='.$authorName.'&book_description='.$desciption.'&image_name='.$imageName);
          }
      }
      else {
        // if upload fails
        header('Location: ../Books-adding-form.php?upload=fail');
      }
    }
  }
?>
