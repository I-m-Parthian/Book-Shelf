<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <h2 class="">
    <a class="text-light" href="bookList.view.php">Book-shelf</a>
  </h2>

  <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="bookDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Book Manager
        </a>
        <div class="dropdown-menu" aria-labelledby="bookDropdown">
          <a class="dropdown-item" href="Books-adding-form.php">All books</a>
          <a class="dropdown-item" href="landing-page.php">Wishlist</a>
          <a class="dropdown-item" href="landing-page.php">Currently reading</a>
          <a class="dropdown-item" href="landing-page.php">Already read</a>

        </div>
      </li>
  </ul>
  <div class="dropdown pull-right">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="sessionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Hi User
    </button>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="sessionDropdown">
      <a class="dropdown-item" href="adminDashboard.php">Dashboard</a>
      <a class="dropdown-item" href="includes/logout.controller.php">Log Out</a>
    </div>
  </div>
</nav>
