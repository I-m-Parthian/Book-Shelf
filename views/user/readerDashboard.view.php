<?php require '/opt/lampp/htdocs/BookShelf/views/layouts/header.php'; ?>
<?php require '../layouts/readerNavBar.view.php'; ?>
  <div class="container mt-4">
    <div class="row row-col-2">
      <div class="col-12 mt-5">
        <ul class="list-group">
          <li class="list-group-item bg-secondary text-light"><h3>Manage Books</h3></li>
          <li class="list-group-item"><a href="bookList.view.php">All books</a></li>
          <li class="list-group-item">Wishlist</li>
          <li class="list-group-item">Currently reading</li>
          <li class="list-group-item">Already Read</li>
        </ul>
      </div>
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
<?php require '/opt/lampp/htdocs/BookShelf/views/layouts/footer.php'; ?>
