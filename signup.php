<?php
require_once "includes/header.php";
require_once "includes/connection.php";


$errors = array("email" => "", "password" => "", "username" => "", "fullname" => "");
if ($_POST) {
    if (!isset($_POST['email']) || $_POST['email'] == '') {
        $errors['email'] = 'Email required';
    }

    if (!isset($_POST['password']) || $_POST['password'] == '') {
        $errors['password'] = 'Password required';
    }

    if (!isset($_POST['fullname']) || $_POST['fullname'] == '') {
        $errors['fullname'] = 'Fullname required';
    }

    if (!isset($_POST['username']) || $_POST['username'] == '') {
        $errors['username'] = 'Fullname required';
    }

    if ($errors['email'] == '' && $errors['password'] == '' && $errors['fullname'] == '' && $errors['username'] == '') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullname= $_POST['fullname'];
        $username = $_POST['username'];
        $sql = "INSERT INTO User(full_name, username, email, password) VALUES('$fullname', '$username', '$email', '$password')";

        $result = mysqli_query($connection, $sql);

        if (!$result) {
            die("Couldn't insert user");
        }
    }

}
?>
<html>
    <head>
        <title>Signup form</title>
    </head>

    <body>
        <form method="POST">
            <label> Full Name</label>
            <input type="text" name="fullname"> <br />
            <div class="error"><?php  echo $errors['fullname'] ?></div>
            <label> Username </label>
            <input type="text" name="username">
            <div class="error"><?php  echo $errors['username'] ?></div>
            <label>email</label>
            <input type="text" name="email"><br><br>
            <div class="error"><?php  echo $errors['email'] ?></div>
            <label>password</label>
            <input type="password" name="password"><br><br>
            <div class="error"><?php  echo $errors['password'] ?></div>
            <input type="submit" name="signup" value="Register">
        </form>
    </body>
    </html>
