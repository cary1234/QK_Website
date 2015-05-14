<?php require("navbar.php"); ?>
<!DOCTYPE html><?php
if ($_SESSION['access']!="root") {
	header('Location: signin_form.php');
}?>
<html lang="en">
	<head>
        <title>Admin Panel</title>
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap core CSS -->
        <link href="css/spacer.css" rel="stylesheet"><!-- Spacer -->

        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

	</head>
	<body>
        <!--Empty Space-->
            <div class="row spacer">
            </div>
            
            <div class="row spacer">
            </div>
        <!--End of Empty Space-->
        <div class="container">
            <div class="row">
            	
                <div class="col-md-1">
                </div>
                
                <div class="col-md-10">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">
                            	<span class="glyphicon glyphicon-bookmark text-center"></span>
                                Welcome, <?php echo $_SESSION['fname']; ?>
                            </h3>
                        </div>
                        <br>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-lg-6">
                                    <a href="admin_lists.php" class="btn btn-danger btn-lg center-block" role="button">
                                          <br><br>
                                          <span class="glyphicon glyphicon-comment"></span> <br/>Manage Users
                                          <br><br>
                                    </a>
                                    <br>
                                    <small>
                                        <p class="text-center">
                                            Manage <strong>users</strong> profile, that includes:
                                        </p>
                                        <div class="col-xs-6 col-xs-6">                                        
                                            <ul class="pull-left">
                                                <li>Change <strong>Picture</strong>.</li>
                                                <li>Change <strong>Information</strong>.</li>
                                                <li>Delete <strong>User</strong>.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-xs-6">                                        
                                            <ul class="pull-left">
                                                <li>Change <strong>Password</strong>.</li>
                                                <li>Change <strong>Access</strong>.</li>
                                            </ul>
                                        </div>
                                    </small>
                               	</div>
                            
                                <div class="col-xs-6 col-lg-6">
                                    <a href="#" class="btn btn-primary btn-lg center-block" role="button">
                                    	<br><br>
                                        <span class="glyphicon glyphicon-comment"></span> <br/>Users Action
                                    	<br><br>
                                    </a>
                                    <br>
                                    <small>
                                    	<p class="text-center">
                                        	See <strong>actions</strong> of the following:
                                        </p>
                                        <div class="col-xs-6 col-xs-6">                                        
                                            <ul class="pull-left">
                                                <li>Edit <strong>Products</strong>.</li>
                                                <li>Delete <strong>Products</strong>.</li>
                                                <li>Add <strong>Products</strong>.</li>
                                                <li>Change Pic of <strong>Products</strong>.</li>
                                                <li>Change Pass of <strong>Users</strong>.</li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-xs-6">                                        
                                            <ul class="pull-left">
                                                <li>In / Out of <strong>Users</strong>.</li>
                                                <li>Edit <strong>Users</strong>.</li>
                                                <li>Delete <strong>Users</strong>.</li>
                                                <li>Add <strong>Users</strong>.</li>
                                                <li>Change Pic of <strong>Users</strong>.</li>
                                            </ul>
                                        </div>
                                    </small>
                                </div>
                            </div>
                    	</div>
                    </div>
                </div>
                
                <div class="col-md-1">
                </div>
                
            </div>
        </div>
        <!--Empty Space-->
        <div class="row spacer">
            </div>
            <div class="row spacer">
            </div>
            <div class="row spacer">
            </div>
        <!--End of Empty Space-->
        <?php require("footer.php"); ?>
	</body>
</html>















