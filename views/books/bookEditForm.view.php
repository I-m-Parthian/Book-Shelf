<?php
  require '../layouts/header.php';
  require '../layouts/navigationBar.php';
?>
<body>
  <div class="container">

    <!-- Form to take input -->
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

        <div class="form-group">
          <label class="form-check-label" for="NumberInput">Number of Copies<span class="text-danger">*</span></label>
          <input type="number" class="form-check-label" name="copies" style="width:50px;">
        </div>

        <button type="button" class="btn btn-outline-success btn-lg" name="button" style="margin-right: 10px;">Save</button>
        <button type="button" class="btn btn-outline-danger btn-lg" name="button" style="margin-right: 10px;">Delete</button>

      </form>
    </div>

  </div>
  <?php require '../layouts/footer.php'; ?>
