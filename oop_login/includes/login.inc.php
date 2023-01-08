<?php






if (isset($_POST['signup'])){
    
    // grabbing the data
   
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];
   
    // Instantiate signupContr class
   
    include "../classes/dbh.classes.php";
    include "../classes/signup.classes.php";
    include "../classes/signup-contr.classes.php";
    $login = new loginContr($uid, $pwd);
   
   
    // Running error handlers and user signup
   
    $login->loginUser();
   
    // going back to front page
   
    header("location: ../index.php?error=none");
   
    
    
      
   }
   
   
   
   
   











?>