<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles4.css">
    <title>Document</title>
</head>
<body>
<?php
$servername = "sql111.infinityfree.com"; 
$username = "if0_37224457";
$password = "qsSHTStG1Z"; 
$dbname = "if0_37224457_test"; 

session_start();

$data=mysqli_connect($host,$user,$password,$db);
if($data==false){
    die("connection error");
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $sql="select * from user where username='".$username."' AND password='".$password."'";

    $res=mysqli_query($data,$sql);
     $row=mysqli_fetch_array($res);
     if($row["usertype"]=="admin"){
        $_SESSION["username"]=$username;
        header("location: adminhomepage.php");
    }
}

?>
<form class="login" method="POST">
<h2>Welcome, Admin!</h2>
<p>Please log in</p>
<input type="text" name="username" placeholder="User Name" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" value="Log In" />
<div class="links">
  <a href="#">Forgot password</a>
</div>
</form>




</body>
</html>