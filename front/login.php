<div class="container">
  <h1 class="heading">Login</h1>
  <form  action="./back/request.php" method="post"> 
  
    <div class="col-6 offset-sm-3 mb-4">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter your email" name="email">
    </div>
    <div class="col-6 offset-sm-3 mb-4">
    <label for="password" class="form-label">password</label>
    <input type="password" class="form-control" id="exampleInputEmail1" placeholder="enter your password" name="password">
    </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
   -->
   <div class="col-6 offset-sm-3 mb-4">
  <button type="submit" class="btn btn-primary" name="login">login</button>
  </div>
</form>

  
</div>