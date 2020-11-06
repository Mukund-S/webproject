<?php
include 'common.php';

$e = $_POST['email'];
$p = $_POST['password'];
//$d = md5($p);
$select = "Select email from user where email='$e' AND password='$p';";
$run = mysqli_query($con,$select);
if(mysqli_num_rows($run,0))
{
    echo "Invalid username or password";
}
else
{
    $fetch = mysqli_fetch_array($run);
    $_SESSION['email']= $fetch['email'];
    $_SESSION['user_id']=$fetch['id'];
    header('location: page1.php');
}
?>