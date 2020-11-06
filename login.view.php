<body>
    <form  method="post" action="includes/login.controller.php" class="form-signin">
      <div class="text-center mb-4">
        <?php
        if(isset($_GET['signin'])) {
          $val = $_GET['signin'];
          if($val == 'fail'){
            echo '<div class="alert alert-danger">Email or Password is incorrect</div>';
          }
        }
         ?>
        <h1 class="text-primary mb-4">Book-Shelf</h1>
      </div>

      <div class="form-label-group">
        <input type="email" class="form-control mb-4" name="useremail" placeholder="Email address">
        <input type="password" class="form-control mb-4" name="userpasswrd" placeholder="Password">
        <input type="submit" class="btn btn-success btn-block mb-4" name="submit" value="Sign In">
      </div>
      <div class="text-center">
      <a href="userSignup.view.php">Sign Up,If not registered</a>
      </div>
    </form>
</body>
