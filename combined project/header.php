<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <b><a class="navbar-brand" href="index.php">Tours & Travels</a></b>
            <!-- <b><a class="navbar-brand" href="page1.php">City</a></b> -->
        </div>
        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['email'])){
                    ?>
                <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>City</a></li>
               <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
            
            <?php
                }else{
            ?>
                <li><a href="page1.php"></span>City</a></li>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
            <?php
                }
                ?>
    </div>
</div>