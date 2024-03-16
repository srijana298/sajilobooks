<?php
?>
<html>
    <head>
        <title>Signup form</title>
    </head>

    <body>
        <form action="createUser.php" method="POST">
            <label> First Name</label>
            <input type="text" name="firstname">
            <label>last Name</label>
            <input type="text" name="lastname"><br><br>
            <label>email</label>
            <input type="text" name="email"><br><br>
            <label>password</label>
            <input type="password" name="password"><br><br>
            <label>signup:</label>
            <input type =submit name= signup>
        </form>
    </body>
    </html>