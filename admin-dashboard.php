<?php  require 'header.php'; ?>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="landing-page.php">Book-shelf</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="bookDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Book Manager
        </a>
        <div class="dropdown-menu" aria-labelledby="bookDropdown">
          <a class="dropdown-item" href="Books-adding-form.php">Add a book</a>
          <a class="dropdown-item" href="landing-page.php">Delete/Edit a book</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="UserDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          User Manager
        </a>
        <div class="dropdown-menu" aria-labelledby="UserDropdown">
          <a class="dropdown-item" href="Books-adding-form.php">Add a User</a>
          <a class="dropdown-item" href="landing-page.php">Delete/Edit a User</a>
        </div>
      </li>

    </ul>
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="sessionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Hi User
      </button>
      <div class="dropdown-menu" aria-labelledby="sessionDropdown">
        <a class="dropdown-item" href="#">Log Out</a>
      </div>
    </div>

  </div>
</nav>

<? require 'footer.php';?>
