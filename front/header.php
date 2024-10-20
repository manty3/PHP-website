<nav class="navbar navbar-expand-lg navbar-light dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Akshay</a>
    <img class="logo" src="./public/logo.jpeg"/>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <?php
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Check if 'user' key exists in the session before accessing 'username'
        if (isset($_SESSION['user']) && isset($_SESSION['user']['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Logout</a>
        </li>
        <?php } else { ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Signup</a>
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

