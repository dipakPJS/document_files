<?php

class signupContr extends login
{
    private $uid;
    private $pwd;
    private $pwdrepeat;
    private $email;

    public function __construct($uid, $pwd, $pwdrepeat, $email)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdrepeat;
        $this->email = $email;
    }

    public function signupUser()
    {
        if ($this->emptyInput() == false) {
            // echo " Empty Input! "
            header('location: ../index.php?error=emptyinput');
        }

        if ($this->invalidUid() == false) {
            // echo " Invalid Username! ";
            header('location: ../index.php?error=username');
        }

        if ($this->invalidEmail() == false) {
            // echo " Invalid Username! ";
            header('location: ../index.php?error=email');
        }

        if ($this->pwdMatch() == false) {
            // echo " Invalid Username! ";
            header('location: ../index.php?error=passwordmatch');
        }

        if ($this->uidTakenCheck() == false) {
            // echo " username or email taken!";

            header('location: ../index.php?error=useroremailtaken');
        }

        $this->setUser($this->uid, $this->pwd, $this->email);
    }

// //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    private function emptyInput()
    {
        if (empty($this->uid) || empty($this->pwd) || empty($this->pwdrepeat) || empty($this->email)) {
            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

private function invalidUid()
{
    if (!preg_match('/^[a-zA-Z0-9]*$/', $this->uid)) {
        $result = false;
    } else {
        $result = true;
    }

    return $result;
}

private function invalidEmail()
{
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
        $result = false;
    } else {
        $result = true;
    }

    return $result;
}

private function pwdMatch()
{
    if ($this->pwd !== $this->pwdrepeat) {
        $result = false;
    } else {
        $result = true;
    }
}

private function uidTakenCheck()
{
    if (!$this->checkUser($this->uid, $this->email)) {
        $result = false;
    } else {
        $result = true;
    }
}
}
