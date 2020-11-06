<?php
include 'common.php';

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Sign Up</title>
    <link rel="stylesheet" href="./style.css" type="text/css">

</head>
<body>
    <!-- <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="index.html">Lifestyle Store</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
    </div>
  </div>
</nav> -->
<?php
include 'header.php';
?>
<br><br><br><br>
<div class="container banner-image1">
    <div class="row">
        <div class="col-xs-4 col-xs-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><b>SIGN UP</b></h4>
                </div>
                <div class="panel-body">
                    <form method="POST" action="signup_submit.php">
                        <div class="form-group">
                            <input type="text" name="name"class="form-control" placeholder="Name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" placeholder="Email" required="true" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="pass" class="form-control" placeholder="Password" required="true">
                        </div>
                        <div class="form-group">
                            <input type="number" name="contact" class="form-control" placeholder="Contact" required="true">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <footer>
    <div class="container">
        <centre>Copyright © Lifestyle Store. All Rights  Reserved ||Contact Us: +91 90000 00000</centre>
    </div>
</footer> -->
<?php
include 'footer.php';
?>
</body>
</html>