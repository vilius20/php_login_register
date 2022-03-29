<?php

if(isset($_POST['submit'])) {

    // Data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];
    $email = $_POST['email'];

    // SignupContr class
    include "../classes/db.classs.php";
    include "../classes/signup.class.php";
    include "../classes/signup-contr.class.php";
    $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

    // Error handlers
    $signup->signupUser();

    // Going to front page
    header("location: ../index.php?error=none");
}