<?php
  require '../layouts/header.php';
  require '../layouts/navigationBar.php';
?>

  <div class="container">

    <!-- Form to take input -->
    <div id="details-form" style="margin-top:1%">
      <form method="post" action="includes/registerUser.php" enctype="multipart/form-data" >

        <div class="form-group">
          <label for="userNameInput">Full Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" placeholder="Enter fullname" name="fullName" value="">
        </div>

        <div class="form-group">
          <label for="emailInput">Email Address <span class="text-danger">*</span></label>
          <input type="email" class="form-control" placeholder="Enter email" name="email" value="">
        </div>

        <div class="form-group">
          <label for="passwordInput">Old Password<span class="text-danger">*</span></label>
          <input type="password" class="form-control" placeholder="Old Password" name="password" value="">
        </div>

        <div class="form-group">
          <label for="passwordInput">New Password</label>
          <input type="password" class="form-control" placeholder="New Password" name="password" value="">
        </div>

        <div class="form-group">
          <label for="AuthorNameInput">Retype  New Password</label>
          <input type="password" class="form-control" placeholder="Retype  New Password" name="retyped" value="">
        </div>


        <button type="button" class="btn btn-outline-success btn-lg" name="button" style="margin-right: 10px;">Save</button>
        <button type="button" class="btn btn-outline-danger btn-lg" name="button" style="margin-right: 10px;">Delete</button>

      </form>
    </div>

  </div>
<?php require '../layouts/footer.php'; ?>
