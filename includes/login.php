<?php

if(isset($_POST['submit'])) {

    // Data
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    // SignupContr class
    include "../classes/db.classs.php";
    include "../classes/login.class.php";
    include "../classes/login-contr.class.php";
    $login = new LoginContr($uid, $pwd);

    // Error handlers
    $login->loginUser();

    // Going to front page
    header("location: ../index.php?error=none");
}