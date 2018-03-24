<?php 

require("connect.php");
include("function.php");
if(loggedin())
{
	header("Location: download.php");
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
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login</h3>
	                            		<p>Enter email and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="login_email">Email</label>
				                        	<input type="text" name="login_email" placeholder="Email..." class="form-username form-control" id="form-username" required>
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="login_password" placeholder="Password..." class="form-password form-control" id="form-password" required>
				                        </div>
				                        <button type="submit" name="login" class="btn">Login!</button>
				                    </form>
									<?php 
									ob_start();
									if(isset($_POST['login']))
									{
										$login_email=$_POST['login_email'];
										$login_password=hash("sha512",$_POST['login_password']);
										$abc="SELECT * FROM user WHERE email='$login_email'";
										$loginq=mysql_query($abc);
										$login=mysql_fetch_assoc($loginq);
										if($login['email']==$login_email && $login['password']==$login_password)
										{
											$usernm=$login['username'];
											session_start();
											$_SESSION['user_name']=$usernm;
											sleep(3);
											header("Location: download.php");
											
										}
										else
											//echo "EMAIL: ".$login['email']. " & ".$login_email."<br>";
											//echo "PASSWORD: ".$login['password']. " <br> ".$login_password."<br>";
										
											echo "Incorrect email/password combination.";
										
									}
									ob_end_flush();
									?>
			                    </div>
		                    </div>
		                
	                        
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                        	
                        <div class="col-sm-5">
                        	
                        	<div class="form-box">
                        		<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Sign up now</h3>
	                            		<p>Fill in the form below to get instant access:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-pencil"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="registration-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="name">Name</label>
				                        	<input type="text" name="name" placeholder="Name..." class="form-first-name form-control" id="form-first-name" required>
				                        </div>
										
										<div class="form-group">
				                        	<label class="sr-only" for="form-email">Email</label>
				                        	<input type="email" name="email" placeholder="Email..." class="form-email form-control" id="form-email" required>
				                        </div>
				                        <div class="form-group">
				                    		<label class="sr-only" for="pwd">Password</label>
				                        	<input type="password" name="pwd" placeholder="Password..." class="form-first-name form-control" id="form-first-name" required>
				                        </div>
										<div class="form-group">
				                    		<label class="sr-only" for="rpwd">Repeat Password</label>
				                        	<input type="password" name="rpwd" placeholder="Repeat Password..." class="form-first-name form-control" id="form-first-name" required>
				                        </div>
				                        <button type="submit" name="signup" class="btn">Sign me up!</button>
				                    </form>
									<?php 
									
									
									ob_start();
									if(isset($_POST['signup']))
									{
										$name=$_POST['name'];
										$email=$_POST['email'];
										$pass1=$_POST['pwd'];
										$pass2=$_POST['rpwd'];
										$signupquery=mysql_query("SELECT * FROM user WHERE email='$email'");
										$check=mysql_num_rows($signupquery);
										if(check==0)
										{
											$length=strlen($name);
											
											//echo $length;
											if($length<=15 && $length>=8)
											{
										if(isset($_POST['signup']))
										{
										if($pass1==$pass2)
										{
											$length1=strlen($pass1);
											if(length1<=15 && $length1>=8)
											{
										$passdb=hash("sha512",$pass1);
										$signquery_text="INSERT INTO user(username, email, password) VALUES ('$name', '$email', '$passdb') ";
										$signquery=mysql_query("INSERT INTO user(username, email, password) VALUES ('$name', '$email', '$passdb') ");
										
										session_start();
										$_SESSION['user_name']=$name;
										header("Location: download.php");
										
										exit();
										}
										else
											echo "Password should be between 8 and 15 characters long.";
										}
										else
											echo "Passwords do not match.";
										}
										
										}
										else 
											echo "Username should be between 8 and 15 characters long.";
										}
										else 
											echo "Username already exists.";
										
									}
									
									
									ob_end_flush();
									?>
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