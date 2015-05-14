<?php require("navbar.php"); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gomeco Group of Companies - Home</title>
	<link rel="shortcut icon" href="images/icon_gomeco.ico">
    <link href="css/panelTab.css" rel="stylesheet">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap core CSS -->
	<link href="css/styles.css" rel="stylesheet"><!--Personal CSS-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script><!-- Jquery -->
    
	<!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
  </head>
  <body>
      <!--Empty Space for Navbar-->
      <br><br>
      <!--End of empty space-->   
      
      <br><br>
      <div class="container">
          <div class="row">
              <div class="col-md-12 col-md-offset-0">
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          <h3 class="panel-title">About Us</h3>
                          <span class="pull-right">
                              <!-- Tabs -->
                              <ul class="nav panel-tabs">
                                  <li class="active"><a href="#tab1" data-toggle="tab">About Us</a></li>
                                  <li><a href="#tab2" data-toggle="tab">Product Line Equipements</a></li>
                              </ul>
                          </span>
                      </div>
                      <div class="panel-body col-md-offset-0">
                          <div class="tab-content">
                              <div class="tab-pane active" id="tab1">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-sm-6">
                                              <img class="img-responsive" src="images/default_QK.png" width='520' height='360' 
                                              onerror="this.src='images/default_QK.png';">
                                          </div>
                                          <div class="col-sm-6">
                                              <p align="justify">
                                                  <strong>About Us</strong><br><br>
                                                  Quickitchen is there to serve at affordable prices the 
                                                  equipment needs of start-up and leveling -up food businesses 
                                                  and yes,residentials as well. Kitchen equipment made from 
                                                  stainless steel ensures higher cleanliness, safety and 
                                                  aesthetic standards. Buying Quickitchen equipment is an 
                                                  investment. Yet, Quickitchen&#39;s value engineering efforts have 
                                                  seen to it that its prices are indeed still very much affordable. 
                                                  Quickitchen&#39;s product lines are <strong>preparation equipment</strong>
                                                  , <strong>cooking equipment</strong> and <strong>food service equipment</strong>.
                                              </p>
                                          <br><br>
                                          </div>   
                                          
                                          <div class="col-sm-2">
                                              <img class="img-responsive" src="images/marketing_images/marketing_1.png"
                                              width='150' height='130' onerror="this.src='images/default_QK.png';">
                                          </div>
                                          <div class="col-sm-2">
                                              <img class="img-responsive" src="images/marketing_images/marketing_2.png"
                                              width='150' height='130' onerror="this.src='images/default_QK.png';">
                                          </div>
                                          <div class="col-sm-2">
                                              <img class="img-responsive" src="images/marketing_images/marketing_3.png"
                                              width='150' height='130' onerror="this.src='images/default_QK.png';">
                                          </div>    
                                          
                                      </div>
                                  </div>
                              </div>
                              <div class="tab-pane" id="tab2">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-sm-6">
                                               <img class="img-responsive" src="images/default_QK.png" width='520' height='320'
                                               onerror="this.src='images/default_QK.png';">
                                          </div>
                                          <div class="col-sm-6">
                                              <p align="justify">
                                                  <strong>
                                                      Preparation Equipment, Cooking Equipment and Food Service Equipment
                                                  </strong>
                                                  <br><br>
                      
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                  Perferendis sit iusto omnis aliquid nesciunt atque nostrum 
                                                  maiores culpa quisquam voluptates? Perferendis sit iusto 
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                  Perferendis sit iusto omnis aliquid nesciunt atque nostrum 
                                                  maiores culpa quisquam voluptates? Perferendis sit iusto 
                                                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                                  Perferendis sit iusto omnis aliquid nesciunt atque nostrum 
                                                  maiores culpa quisquam voluptates? Perferendis sit iusto.
                                              </p>
                                              <br><br>
                                              <a href="products.php" class="btn btn-primary btn-lg center-block">
                                                  View Our Products Now!
                                              </a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  
  
	  <script type="text/javascript" src="js/bootstrap.js"></script>
  
  </body>
</html>