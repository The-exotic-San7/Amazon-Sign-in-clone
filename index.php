<?php
include('db_connect.php');
 $errors= ['name'=>''];
 $name='';

if(isset($_POST['submit'])){
	session_start();

	$_SESSION['name']=$_POST['name'];
	if(empty($_POST['name'])){
		$errors['name'] ='! Enter your email or mobile phone number';
	}
	else{
		$name=$_POST['name'];
	}

	if(array_filter($errors)){

	}
	
	else{
		$name=mysqli_real_escape_string($con,$_POST['name']);
		

		$sql="INSERT INTO login(name) VALUES('$name')";

		if(mysqli_query($con,$sql)){
			header('Location: signin.php');
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
	  	overflow: hidden;
	  	overflow-y: hidden;
	  	overflow-x: hidden;


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
    		height: 310px;
    		border: 1px solid lightgrey;
    		border-radius: 5px;
	  }

           



	  ul {  
    margin: 0.75em 0;  
    padding: 0 1em;  
    list-style: none;  
    }  

	 
	 li:before {   
     content: "";  
     border-color: transparent slategrey;  
     border-style: solid;  
     border-width: 0.30em 0 0.30em 0.40em;  
     display: block;  
     height: 0;  
     width: 0;  
     left: -1em;  
     top: 1.1em;  
     position: relative;
     color: black;  
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
	  <form action="index.php" method="POST">
	  	<div style="position:relative;top:-55px;left: -40px;font-size: 30px;font-family: Arial,sans-serif;">Sign-In</div> <br /><br />
	  	<label style="position:relative;top:-95px;left:-35px;color: black;font-family: Arial,sans-serif;font-size: 13px;"><b>Email or mobile phone number</b></label>
	  	<input style="position:relative;top:-90px;left: -35px; border: 1px solid orange;border-radius: 3px;height: 30px;width: 320px;" type="name" name="name" id="email">
	  	<div style="position: relative;top: -85px;left: -30px;font-size: 12px;font-family: Arial,sans-serif;text-shadow: 0.2px 0.2px darkred;" class="red-text"><?php echo  $errors['name'] ?></div>
	  	<div  style="position:relative;top: -83px;left: -35px;">
	  	  <button  type="submit" name="submit" value="submit" style="width: 320px; height: 32px;font-size: 14px;background: #f0cd6c;border: 1px solid saddlebrown;border-radius: 3px;position: relative;top: 7px;cursor: pointer;">Continue</button>

	  	  <p style="font-size: 13px;font-family: Arial,sans-serif; color:#111;position: relative;top: 10px;">By continuing,you agree to Amazon's</p><a href="#"><p style=" position: relative;right:-215px;top: -22px;font-size: 13px;font-family: Arial,sans-serif;text-shadow: 0.2px 0.2px darkblue;" >Conditions of</a></p>
	  	  <a href="#"><p style="font-size:13px;font-family:Arial,sans-serif;position: relative;top:-37px;text-shadow:0.2px 0.2px darkblue;">Use</a></p><a href="#"><p style="font-size: 13px;font-family: Arial,sans-serif;position: relative;top: -69.5px;right: -28px;text-shadow: 0.2px 0.2px darkblue;">and</p><p style="font-size:13px;font-family:Arial,sans-serif;position: relative;top:-102px;right:-55px;text-shadow:0.2px 0.2px darkblue;color: #146eb4;">Privacy Notice.</a></p>
	  	</div>
        <ul>
	  	  <a href="#"><li style="color:#146eb4;font-size:13px;font-family:Arial,sans-serif;position: relative;top: -180px;left: -20px;text-shadow: 0.2px 0.2px royalblue;">
	  		Need help?</a></li>
	  	</ul>

	  </form>


	   	<hr style="position:relative;left: -125px;top: 20px;" width="135"color="lightgrey"size="0.5">
	   	<h6 class="center"style="position: relative;font-size: 13px;font-family: Arial,sans-serif;color: grey;top: 2px;">New to Amazon?</h6>

	   <hr style="position:relative;right: -125px;top: -15px;" width="135"color="lightgrey"size="0.5">

	  <div class="center">
	  	<button onclick="#" style="width: 390px;height:33px;font-size:14px;border:0.5px solid grey;border-radius:3px;font-family:Arial,sans-serif;cursor: pointer;background-color: whitesmoke;color: black;">
	  		Create an Amazon account
	  	
	  	</button>
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