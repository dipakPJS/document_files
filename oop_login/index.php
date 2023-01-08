
<?php 
require_once "./includes/autoload.inc.php";
include_once "templates/header.php"; ?>

<div class="row">

<!-- Form section starts -->

<div class="col col-md-6 col-sm-12 col-xs-12">

<form action="includes/signup.inc.php" method="POST">
    <h4>Not registered Yet. Register Below:</h4>
  <div class="mb-3 pt-2">
    <label class="form-label">Username</label>
    <input type="text" class="form-control" name="uid" placeholder="please enter your username">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name = "pwd" placeholder="Please enter Your Password">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="pwdrepeat" placeholder="Repeat Your password">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control"  >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  
  
  <button type="submit" name="signup" class="btn btn-primary">Submit</button>
</form>

<!-- Form section ends -->

</div>

<div class="col col-md-6 col-sm-12 col-xs-12">

<form action="includes/login.inc.php" method="POST">
    <h4>Login Here! if you have already registered</h4>
  <div class="mb-3 pt-2">
    <label   class="form-label">Username</label>
    <input type="text" class="form-control" name="username" placeholder="please enter your username">
   
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" name = "pwd" placeholder="Please enter Your Password">
  </div>
 
 
  
  
  <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>

<!-- Form section ends -->

</div>

</div>

 <?php include_once "templates/footer.php"; ?>