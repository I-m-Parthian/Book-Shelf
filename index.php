<?php
  include 'header.php'
 ?>
<body>
  <form class="form-signin" action="landingpage.php" method="post">
    <div class="text-center mb-4">
      <h1 class="text-primary mb-4">Book-Shelf</h1>
    </div>

    <div class="form-label-group">
      <input type="email" class="form-control mb-4" name="useremail" placeholder="Email address">
      <input type="password" class="form-control mb-4" name="userpasswrd" placeholder="Password">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
 </form>
</body>
