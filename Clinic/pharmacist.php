<!DOCTYPE html>
<html>
<head>
	<title>Pharmacist</title>
</head>
<style type="text/css">
	body{
		display: flex;
		flex-direction: column;
		flex-wrap: wrap;
		background-image: url(hearing-aid-blue-pills-background-medical-pharmacy-healthcare-concept-copy-space-empty-place-text-logo-145469804.jpg);
		background-repeat: no-repeat;
		background-position: center;
		background-size: cover;
		align-items: center;
		height: 330px;
	}
.label{
	color: white;
	padding: 8px;
	font-family: Arial;
	background-color: #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 99%;
	margin-top:20px; 
}
.label2{
    color: white;
    padding:8px;
    font-family: Arial;
    background-color: #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 50%;
	margin-top:20px; 
  }
  .div{
  	margin-top: 50px;
    position: absolute;
    left: 40%;
    top: 200px;
  }
  .email{
  	
  	border:none;
  	padding: 3px;
  	font-size: 14px;
  	border-radius: 5px;
  	box-shadow: 1px 3px 5px grey;
  }
  .email:focus{
  	 border:1px solid #2196F3;
  }
  .submitbtn{
  	padding: 14px;
	margin-top: 50px;
	width: 50%;
	border:none;
	background-color: white;
	color: black;
	border-radius: 10px;
	text-align: center;
	transition-duration: 0.4s ;
  }
  .submitbtn:hover{
  	  background-color: #1E90FF;
     color: white
  }
  .exitbtn{
  	padding: 10px;
	text-align: center;
	float: right;
	border: none;
	border-radius: 12px;
  }
  .exitbtn:hover{
  	background-color: #1E90FF;
     color: white
  }
</style>
<body>	 
<span class="label">Medics Portal<input class="exitbtn" type="submit" name="exit"></span>
<span class="label2">Pharmacist</span>
<form action="Pharmacist" method="POST">
<div class="div">
Enter Patient Email:<br><br>
<input class="email" type="email" name="email">
<input class="submitbtn" type="submit" name="submit" value="submit">
</div>
</form>

<!-- <?php
   $user="submit";
   if($user=="submit"){
   	?>
     <style type="text/css">
     	.email{
     		display: none;
     	}
     	/*.submitbtn{
     		display: none;
     	}*/
     </style>
     
   	<?php
   }
   ?> -->
</body>
</html>