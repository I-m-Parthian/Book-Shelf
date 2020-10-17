 <?php
  include_once "dbh.php";

  if(isset($_POST['submit'])){
    $bookName = $_POST['BookName'];
    $authorName = $_POST['AuthorName'];
    $desciption = $_POST['Description'];
    $imageName = $_POST['ImageName'];

    $sql = "INSERT INTO books(
    book_name, author_name, book_description, image_name) VALUES ('$bookName','$authorName','$desciption','$imageName')";

    $result=mysqli_query($conn,$sql);
    if(isset($result)){
        header("Location: ../Books-adding-form.php?upload=success");
    }
    else{
      header("Location: ../Books-adding-form.php?fail=success");
    }
  }
?>
