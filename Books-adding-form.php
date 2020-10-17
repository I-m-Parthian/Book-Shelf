<?php
  include "header.php"
?>
<div class="container">
  <?php

  if(isset($_GET['fail'])){
    echo '<div class="alert alert-success">Book Added Successfully</div>';
  }
  else if(isset($_GET['upload'])){
    echo '<div class="alert alert-danger">Please fill details correctly</div>';
  }
  ?>


  <!-- Button to Go back to home page -->
  <a class="btn btn-outline-primary back-button" role="button" href="index.php">◀️ Back</a>
  <div id="details-form" style="margin-top:1%">
    <form method="post" action="includes/upload.php" enctype="multipart/form-data" >

      <div class="form-group">
        <label for="BookNameInput">Book Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" placeholder="Enter book name" name="BookName" value="">
      </div>

      <div class="form-group">
        <label for="AuthorNameInput">Author Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" placeholder="Enter author name" name="AuthorName" value="">
      </div>

      <div class="form-group">
        <label for="BookDescriptionInput">Description <span class="text-danger">*</span></label>
        <textarea class="form-control" name="Description" rows="3"></textarea>
      </div>

      <!-- <input type="file" class="form-control-file" name="" value=""> -->
      <div class="form-group">
        <label for="BookImageInput">Book Image <span class="text-danger">*</span></label>
        <input type="file" accept="image/*" class="form-control-file" name="ImageFile">
      </div>

      <input type="submit" class="btn btn-success" name="submit" value="Submit">

    </form>
  </div>

</div>

</body>

</html>
