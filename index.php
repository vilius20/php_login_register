<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
</head>

<body>
    <section>
        <?php
    if (isset($_SESSION['userid'])) {
      ?>
        <li><a href="#"><?php echo $_SESSION['useruid']; ?></a></li>
        <li><a href="includes/logout.php">LOGOUT</a></li>
        <?php }
      else {
        ?>
        <li><a href="#">SIGN UP</a></li>
        <li><a href="#">LOGIN</a></li>
        <?php
      }
      ?>
        <h1>Reg</h1>
    </section>
    <!-- Registracija -->
    <p>Register</p>
    <form action="includes/signup.php" method="post">
        <input type="text" name="uid" placeholder="Username" />
        <input type="text" name="pwd" placeholder="Password" />
        <input type="text" name="pwdrepeat" placeholder="Repeat Password" />
        <input type="text" name="email" placeholder="E-mail" />
        <button type="submit" name="submit">SIGN UP</button>
    </form>
    <!-- Prisijungimas -->
    <p>Login</p>
    <form action="includes/login.php" method="post">
        <input type="text" name="uid" placeholder="Username" />
        <input type="text" name="pwd" placeholder="Password" />
        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>

</html>