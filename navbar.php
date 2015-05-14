<?php
    session_start();
	ob_start();
?>
<div name="top"> </div><!--For back to top purposes only-->
<link href="css/bootstrap.css" rel="stylesheet" />
<link href="css/styles.css" rel="stylesheet" />
<!-- Sticky Social CSS -->
<link href="css/sticky-social.css" rel="stylesheet">
<?php include("sticky-social.php") ?>

<!-- Fixed navbar -->
<div class="navbar navbar-fixed-top feature_bg" role="navigation">	
	<div class="container">
		<div class="navbar-header">
            <!-- When the size is small this button will be activated-->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><p class="large white"><strong>Quickitchen</strong></p></a>
		</div>
    
        <div class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <li><a href="how-to-order.php">How to Order</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="about-us.php">About Us</a></li>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li class="dropdown"><?php
                // For Signin / Signup
					if(!isset($_SESSION['access'])){?>
						<li class="dropdown">
                            <a href="signup.php">
                            	Register
                            </a>
                        </li>
						<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                            <?php require_once("signin.php") ?>
                        </li><?php
					}
					 else if(($_SESSION['access']) == 'root'){?>
						<li><a href="admin_menu.php">Manage Users</a></li>
						<li class="dropdown">
                            <a href="signout.php">Signout</a>
                        </li>
					<?php
					}
                    else{?> <!-- User is Log In -->
                    
                    	<li class="dropdown">
                            <a href="signout.php">Signout</a>
                        </li><?php
					}?>
                </li>
        	</ul>
		</div>
	</div>
</div>