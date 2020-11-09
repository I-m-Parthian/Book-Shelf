<?php include '/opt/lampp/htdocs/BookShelf/views/layouts/header.php'; ?>

  <!-- login form -->
    <form  method="post" action="/BookShelf/controller/loginController.php" class="form-signin">
      <div class="text-center mb-4">
        <?php
         if(isset($_GET['login'])) {
           $val = $_GET['login'];
           if($val == 'fail'){
             echo '<div class="alert alert-danger">Email or Password is incorrect</div>';
           }
         }
        ?>
        <h1 class="text-primary mb-4">Book-Shelf</h1>
      </div>

      <div class="form-label-group">
        <input type="email" class="form-control mb-4" name="useremail" placeholder="Email address">
        <input type="password" class="form-control mb-4" name="userpassword" placeholder="Password">
        <input type="submit" class="btn btn-success btn-block mb-4" name="login" value="Login">
      </div>
      <div class="text-center">
      <a href="signUp.view.php">Sign Up,If not registered</a>
      </div>
    </form>

<?php include '/opt/lampp/htdocs/BookShelf/views/layouts/footer.php'; ?>
