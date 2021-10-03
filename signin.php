<?php
include('db_connect.php');
 $errors= ['password'=>''];
 $password='';
session_start();
$name=$_SESSION['name'];

if(isset($_POST['submit'])){
	

	
	if(empty($_POST['password'])){
		$errors['password'] ='! A password is required';
	}
	else{
		$password=$_POST['password'];
	}
	
	if(array_filter($errors)){

	}
	
	else{
		$password=mysqli_real_escape_string($con,$_POST['password']);
		

		$sql="INSERT INTO login(password) VALUES('$password')";

		if(mysqli_query($con,$sql)){
			header('Location: Homepage.html');
			
		}
		else{
			echo 'Query error'.mysqli_error($con);
		}
	}
}
?>



<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content=
        "width=device-width, initial-scale=1.0" />
	<title>Amazon.in</title>

	<style>
		
	  body{
	  	background: white;
	  	background-attachment: fixed;
	  	background-position: center;
	  	background-repeat: no-repeat;
	    overflow: hidden;


	  }
	  .center{
	  	margin-right: auto;
	  	margin-left: auto;
	  	display: block;
	  }
	  form{
	  	    max-width: 390px;
    		margin: 20px auto;
    		padding: 70px;
    		height: 290px;
    		border: 1px solid lightgrey;
    		border-radius: 5px;
	  }

           



	

	 
	   
    } 
    input[type=text]:focus {
     border: 1px solid saddlebrown;
    }
    

    
	  
	</style>
</head>
<body>
	<div style="position: relative;top: -40px;">
	  <img style="height:160px;padding-bottom: 17px;" class="center" src="https://purepng.com/public/uploads/large/amazon-logo-s3f.png">
	  <div style="position:relative;top: -75px;">
	  <form action="signin.php" method="POST">
	  	<div style="position:relative;top:-55px;left: -40px;font-size: 30px;font-family: Arial,sans-serif;">Sign-In</div> <br />
	  	<div style="position:relative;top:-65px;left:-35px;font-family:Arial,sans-serif;font-size: 14px;"><?php echo htmlspecialchars($name) ?></div><br />
	  	<a style="position: relative;right: -50px;top: -111px;font-family: Arial,sans-serif;font-size: 13px;"href="index.php">Change</a>
	  	<label style="position:relative;top:-75px;left:-85px;color: black;font-family: Arial,sans-serif;font-size: 13px;"><b>Password</b></label>
	  	<h6 style="font-size:13px;position:relative;top: -105px
	  	;right: -180px;text-shadow: 0.2px darkblue;"><a href="#">Forgot Password</a></h6>
	  	<input style="position:relative;top:-98px;left: -35px; border: 1px solid darkgrey;border-radius: 3px;height: 30px;width: 320px;" type="password" name="password">
	  	<div style="position: relative;top: -85px;left: -30px;font-size: 12px;font-family: Arial,sans-serif;text-shadow: 0.2px 0.2px darkred;" class="red-text"><?php echo  $errors['password'] ?></div>
	  	<div  style="position:relative;top: -83px;left: -35px;">
	  	  <button  type="submit" name="submit" value="submit" style="width: 320px; height: 32px;font-size: 14px;background: #f0cd6c;border: 1px solid saddlebrown;border-radius: 3px;position: relative;bottom: 5px;top: 2px;cursor: pointer;">Sign-In</button>
            
	  	  
	  	</div>
           <label style="color:black;font-family: Arial,sans-serif;font-size: 13px;position: relative;top: -65px;left: -10px;">Keep me signed in.</label><label style="position:relative;top: -65px;left: -5px;"><a href="#">Details</a></label>
	  </form>


	   	<hr style="position:relative;left: -100px;top: 5px;" width="175"color="lightgrey"size="0.5">
	   	<h6 class="center"style="position: relative;font-size: 13px;font-family: Arial,sans-serif;color: grey;top: -12px;">or</h6>

	   <hr style="position:relative;right: -100px;top: -30px;" width="175"color="lightgrey"size="0.5">

	  <div class="center">
	  	<button onclick="#" style="width: 390px;height:33px;font-size:14px;border:0.5px solid grey;border-radius:3px;font-family:Arial,sans-serif;cursor: pointer;background-color: whitesmoke;color: black;position: relative;top: -10px;">
	  		Get an OTP on your phone
	  	
	  	</button>
	  	<p style="font-size:12px;font-family:Arial,sans-serif;position: relative;left: -80px;color: grey;">𝒊 Messages and data rates may apply</p>
	  	
	  	<hr style="position:relative;top: 13px;border: none;
    	height: 2px;
    	box-shadow: 0 5px 5px -5px lightgrey inset;" width="1200" color="white">
    	<br />
    	<div>
    		<a href="#"><p style="font-size:13px;font-family:Arial,sans-serif;text-shadow: darkblue;position: relative;left: -80px;cursor: pointer;">Conditions of Use</a></p>
    		<a href="#"><p style="position:relative;right: -40px;top: -32px;font-family:Arial,sans-serif;font-size: 13px;text-shadow: darkblue;">Privacy Notice</a></p>
    		<a href="#"><p style="font-size:13px;font-family:Arial,sans-serif;text-shadow: royalblue;position: relative;right: -125px;top: -65px;">Help</p></a>
            <div class="center">
    		<p style="font-size:12px;font-family:Arial,sans-serif;position: relative;top: -65px;">© 1997-2021, Amazon.com, Inc. or its affiliates</p>

    		</div>
    	</div>

    	
	  </div>









</body>