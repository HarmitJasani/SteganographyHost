<?php 

require("connect.php");
include("function.php");
if(!loggedin())
{
	header("Location: index.php");
	exit();
}
error_reporting(0);


?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Steganography</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/img/backgrounds/1.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		
		
		
		
    </head>

    <body>
        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Harmit Jasani's</strong> <br><center>Steganography Center</center></h1>
                            <!--<div class="description">
                            	<p>
	                            	This is a free software <strong>that should be used only and only for non-commercial purposes</strong> template made with Bootstrap. 
	                            	Download it on <a href="http://azmind.com" target="_blank"><strong>AZMIND</strong></a>, 
	                            	customize and use it as you like!
                            	</p>
                            </div>-->
							
                        </div>
						<h3>Hello, <?php echo $_SESSION['user_name'];?></h3>
						<h4><a href="logout.php">Logout</a></h4>
                    </div>
                    
                    <div class="row">
					<form action="" method="POST">
					<a  href="downloaded.php" class="btn btn-default btn-lg btn-block"><i class="fa fa-cloud-download"></i>Download the software</a>
                        </form>
						<?php
						
		
						
		?> 
						<div class="col-sm-5">
						
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
									
	                        			<h3>ENCRYPTION</h3>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                     1) Browse for an appropriate image.<br>
				                     2) Type the text to be hidden.<br>
				                     3) Save the steganographed image.<br>
									 4) Set its decryption password.<br>
			                    </div>
		                    </div>
		                
	                        
                        </div>
                       
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                         <div class="col-sm-5">
                        	
                        	<div class="form-box">
							
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>DECRYPTION</h3>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-unlock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                     1) Enter the unique image ID.<br>
				                     2) Obtain the set password from the encryptor.<br>
				                     3) Enter the corresponding password for decryption.<br>
									 4) Obtain the hidden text.<br>
			                    </div>
		                    </div>
		                
	                        
                        </div>	
                        
						
                    </div>
                    
                </div>
            </div>
            
        </div>

        <!-- Footer -->
        <footer>
        	<div class="container">
        		<div class="row">
        			
        			<div class="col-sm-8 col-sm-offset-2">
					
        				<div class="footer-border"></div>
        				<p>Designed and developed by <a href="https://www.linkedin.com/in/harmitjasani/" target="_blank"><strong>Harmit Jasani</strong></a></p>
        			</div>
        			
        		</div>
        	</div>
        </footer>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>