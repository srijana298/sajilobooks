<?php
require_once "includes/header.php";
require_once "includes/connection.php";

$errors = array("email" => "", "password" => "");
if ($_POST) {
    if (!isset($_POST['email']) || $_POST['email'] == '') {
        $errors['email'] = 'Email required';
    }

    if (!isset($_POST['password']) || $_POST['password'] == '') {
        $errors['password'] = 'Password required';
    }

    if ($errors['email'] == '' && $errors['password'] == '') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "select * from User where email='$email' and password='$password';";

        $result = mysqli_query($connection, $sql);

        if (mysqli_num_rows($result) == 0) {
            die("Access Denied");
        }
    }
}
?>
<html>
<head><title>login  </title>
</head>
    <body> 
    <form method="POST">
        <label>email</label>
        <input type="email" name="email"> <br />
        <div class="error"><?php  echo $errors['email'] ?></div>
        <label>password</label>
        <input type="password" name="password"> <br />
        <div class="error"><?php  echo $errors['password'] ?></div>
        <input type="submit" name="submit" value="Login">
    </form>
    </body>
</html> 
