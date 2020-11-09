<?php include '../layouts/header.php'; ?>
    <form  method="post" action="includes/login.controller.php" class="form-signin">
      <div class="text-center mb-4">
        <h1 class="text-primary mb-4">Book-Shelf</h1>
      </div>

      <div class="form-label-group">
        <input type="email" class="form-control mb-4" name="useremail" placeholder="Email address">
        <input type="password" class="form-control mb-4" name="userpasswrd" placeholder="Password">
        <input type="submit" class="btn btn-success btn-block mb-4" name="submit" value="Sign In">
      </div>
      <div class="text-center">
      <a href="signUp.view.php">Sign Up,If not registered</a>
      </div>
    </form>
<?php include '../layouts/footer.php'; ?>
