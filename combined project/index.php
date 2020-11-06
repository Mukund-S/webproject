<?php
include 'common.php';
if(isset($_SESSION['email'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./style.css" type="text/css">
    <title>Tours & Travels</title>
</head>
<body>
<?php
include 'header.php';
?>
<div class="row">
    <div class="banner-image">
        <div class="container">
            <div class="banner_content col-xs-4 col-xs-offset-4">
                <button type="submit"><a href="page1.php" class="btn btn-danger btn-lg active">Start Exploring</a></button>
            </div>
        </div>
    </div>
</div>

<h4><center>A Web Project Created by: Anubhav,Mukund,Yashwant</center></h4>
<?php
include 'footer.php'
?>
</body>
</html>