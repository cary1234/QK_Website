<?php require("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
        <div name="top"></div>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Quickitchen - Home</title>
        
        
        <link href="css/bootstrap.css" rel="stylesheet"><!-- Bootstrap Core -->
        <link href="css/carousel.css" rel="stylesheet"><!-- Carousel -->
        <link href="css/spacer.css" rel="stylesheet"><!-- Spacer -->
        <link href="css/styles.css" rel="stylesheet"><!-- Personal CSS -->
        
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
        <div class="row spacer">
        </div>
        
        <?php require_once("carousel_index.php"); ?>
        <?php require_once("feature_index.php"); ?>

        <div class="row spacer">
        </div>

        <?php require_once("marketing_index.php"); ?>    
        <?php require("footer.php"); ?>
        <?php require_once("modal_index.php"); ?>
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        <script src="js/smooth-scroll.js"></script><!--This is the function for the going back to top-->
        <script src="js/holder.js"></script><!--This is to hold  images like the one in the header (140x140)-->
  </body>
</html>