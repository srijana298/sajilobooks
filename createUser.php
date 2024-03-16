<?php  
// echo "Your firstname is <b><i><u>", $_POST['firstname'] , "</u>","</i>","</b>";

// // echo $_POST['firstname']; 
// echo "<br>";
// echo "your last name is <b><i><u> ".$_POST['lastname']."</u>","</i>","</b>";
// // echo $_POST['lastname']; 
// echo "<br>";
// echo "your email is <b><i><u>".$_POST['email']."</u>","</i>","</b>";
// // echo $_POST['email'];
// echo "<br>";
// echo "your password is <b><i><u>".$_POST['password']."</u>","</i>","</b>";
// // echo $_POST['password'];
// echo "<br>";

if (!isset($_POST['firstname'])) {
    die("Please input first name");
}

?>

<h1>Data tanne page</h1>


<!-- $_POST --SUPER VARIABLE -->