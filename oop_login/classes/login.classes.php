<?php




 


class login extends dbh {

    protected function getUser($uid, $pwd) {

        $stmt = $this->connect()->prepare("SELECT user_pwd FROM user WHERE user_uid = ? OR user_email = ?");
        
      
        if(!$stmt->execute([$uid, $pwd])){
            $stmt = null;
            header("location: ../index.php/error=stmtfailed");
            exit();
        }
     

        if($stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php/error=stmtfailed");
            exit();
        }
       

        $pwdHashed = $stmt->fethAll(pdo::fetch_Assoc);
        $checkPwd = password_veryfy($pwd, $pwdHashed[0]["user_pwd"]); // It is a built in method in PHP  and the "user_pwd" is same name frmo database.

       
        if($checkPwd == false){
            $stmt = null;
            header("location: ../index.php/error=wrongpassword");
            exit();
        }
  
        elseif($checkPwd == true) {

            $stmt = $this->connect()->prepare("SELECT user_pwd FROM user WHERE
             user_uid = ? OR user_email = ? AND user_pwd = ?");
               
        if(!$stmt->execute([$uid, $email, $pwd])){
            $stmt = null;
            header("location: ../index.php/error=stmtfailed");
            exit();
        }


        if(!$stmt->rowCount() == 0){
            $stmt = null;
            header("location: ../index.php/error=stmtfailed");
            exit();
        }

        $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

        session_start();
         $_SESSION['userid'] = $user[0]['user_id'];
         $_SESSION['useruid'] = $user[0]['user_uid'];
    }

        
      $stmt = null;
        
        }
        
        




}



 



?>