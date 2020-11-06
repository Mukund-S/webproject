
<?php
include 'common.php';

$e = $_POST['email'];
$select = "select id from users where email='$e';";
$run = mysqli_query($con,$select);
$num = mysqli_num_rows($run);
if($num>0)
{
    echo "Email already exits";
}
else
{
    $n = $_POST['name'];
    $p = ($_POST['password']);
    $insert = "Insert into user(name,email,password) values('$n','$e','$p');";
    $put = mysqli_query($con,$insert);
    $id = mysqli_insert_id($con);
    $_SESSION['user_id']=$id;
    $_SESSION['email']=$e;
    header('location: page1.php');
}
?>