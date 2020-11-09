<?php require '../layouts/header.php'; ?>
<?php require '../layouts/navigationBar.php'; ?>
  <div class="container mt-4">
    <div class="row row-col-2">
      <div class="col-6">
        <ul class="list-group">
          <li class="list-group-item bg-secondary text-light"><h3>Manage Books</h3></li>
          <li class="list-group-item"><a href="bookList.view.php">View Books</a></li>
          <li class="list-group-item">See Wishlist</li>
          <li class="list-group-item"><a href="Books-adding-form.php">Add a Book</a></li>
          <li class="list-group-item">Edit/Delete a Book</li>

        </ul>
      </div>
      <div class="col-6" >
        <ul class="list-group">
          <li class="list-group-item bg-secondary text-light"><h3>Manage User</h3></li>
          <li class="list-group-item">View Users</li>
          <li class="list-group-item"><a href="userSignup.view.php">Add User</a></li>
          <li class="list-group-item">Edit/Delete a User</li>
        </ul>
      </div>
      <div class="col-12 mt-5" >
        <ul class="list-group">
          <li class="list-group-item bg-secondary text-light"><h3>History</h3></li>
          <li class="list-group-item">Monthly statistics</li>
          <li class="list-group-item">Weekly statistics</li>
        </ul>
      </div>
    </div>
  </div>
<?php require '../layouts/footer.php'; ?>
