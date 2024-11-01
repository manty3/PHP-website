<nav class="navbar navbar-expand-lg navbar-light dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Akshay</a>
    <img class="logo" src="./public/logo.jpeg" />
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <?php
        session_start(); // Ensure the session is started

        // Check if 'user' exists in the session and is an array
        if (isset($_SESSION['user']) && is_array($_SESSION['user']) && isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/requests.php?logout=true">Logout (<?php echo ucfirst($_SESSION['user']['username']); ?>)</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']; ?>">My Questions</a>
          </li>
        <?php } else { ?>
          <!-- Display Login and SignUp options if 'user' is not set -->
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">SignUp</a>
          </li>
        <?php } ?>

        <li class="nav-item">
          <a class="nav-link" href="#">Items</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ask me</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
