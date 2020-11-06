<?php require 'header.php' ?>

<body>
  <!-- <?php require 'navigationBar4admin.php' ?> -->
  <div class="container">

    <!-- Button to Go back to home page -->
    <a class="btn btn-outline-primary back-button" role="button" href="index.php">◀️ Back</a>


    <?php
    if(isset($_GET['signup'])) {
      $val = $_GET['signup'];
      if($val == 'success'){
        // if user added is success
        echo '<div class="alert alert-success">User Added Successfully</div>';
      }
      else if($val == 'fail'){
        echo '<div class="alert alert-danger">Please fill all neccessory details</div>';
      }
    }

    if(isset($_GET['password'])) {
      $val = $_GET['password'];
      if($val == 'success'){
        // if user added is success
        echo '<div class="alert alert-success">User Added Successfully</div>';
      }
      else if($val == 'fail'){
        echo '<div class="alert alert-danger">Password not match</div>';
      }
    }

    ?>

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
          <label for="passwordInput">Password<span class="text-danger">*</span></label>
          <input type="password" class="form-control" placeholder="Type Password" name="password" value="">
        </div>

        <div class="form-group">
          <label for="AuthorNameInput">Retype Password <span class="text-danger">*</span></label>
          <input type="password" class="form-control" placeholder="Retype Password" name="retyped" value="">
        </div>


        <input type="submit" class="btn btn-success" name="submit" value="Submit">

      </form>
    </div>

  </div>
  <?php require 'footer.php'; ?>
</body>

</html>
