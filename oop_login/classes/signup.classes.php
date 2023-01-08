<?php


class signup extends dbh {

    protected function setUser($uid, $pwd, $email) {

        $stmt = $this->connect()->prepare("INSERT INTO user user_uid, user_pwd, user_email VALUES(?, ?, ?) ");
        
        $hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
        
        if(!$stmt->execute([$uid, $hashedpwd, $email])){
            $stmt = null;
            header("location: ../index.php/error=stmtfailed");
            exit();
        }
        
      $stmt = null;
        
        }
        
        


protected function checkUser($uid, $email) {

$stmt = $this->connect()->prepare("SELECT FROM user_uid WHERE user_uid = ? OR user_email = ?");

if(!$stmt->execute([$uid, $email])){
    $stmt = null;
    header("location: ../index.php/error=stmtfailed");
    exit();
}

$resultCheck;
if($stmt->rowCount() > 0) {
    $resultCheck = false;
}
else {

    $resultCheck = true;
}

return $resultCheck;

}





}








?>