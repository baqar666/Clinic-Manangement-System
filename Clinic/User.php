<!DOCTYPE html>
<html>
<head>
	<title>Medcis Portal</title>
</head>
<style type="text/css">

body, html {
  height: 100%;
}
		body{
			display: flex;
			flex-direction: column;
			background-image: url('medicsportal-background.jpg');
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;
      		align-items: center;
		}
		.btn-group button {
  background-color:#0080ff; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  /*top: 450px;*/
  /*left: 500px;*/
  position: relative;
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */ 
  border-radius: 5%;
  /* Float the buttons side by side */
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Clear floats (clearfix hack) */

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #0000ff;

}
.btn-group {
	/*width: 33%;*/
	
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-self:  center;
	position: relative;
	margin-left: 10px;
	/*padding: 20px*/
}
.btn-group div {
	display: flex;
	flex-direction: column;
	align-items:   center;
	justify-content: center;
	width:100px;
	height: 100px;
	overflow: hidden;
	margin-right: 10px;
	padding: 10px;
	margin-top: 50px;
	/*align-self: center;*/
}
.image {
	display: flex;
	border-radius: 50%;
	height: 100%;
	width: 100%;
	background-color: white;

	/*width: 20%;*/
	/*overflow: hidden;*/
	/*flex-direction: column;*/
}
.image:hover{

	box-shadow: 2px 5px 5px 2px grey;
}
.label{
	color: white;
 	padding: 8px;
  	font-family: Arial;
  	background-color: #2196F3;
  	opacity: 0.5;
  	font-size: 30px;
  	text-align:  center;
  	margin-top:  50px;
  	width: 100%
}
#labelLogin{
	width: 340px;
	align-self:center;
	margin-bottom: 20px;
}
.Userdiv {	
	background-color: white;
	border-radius: 50%;
}
.loginContainer{
	font-family: verdana;
	font-weight: bold;
	font-size: 14px;
	size: 10px;
	width: 200px;
    font-size: 16px;
	/*background-color: blue*/
}
.logintext {
  width: 192px;
  border: none;
  border-radius: 5px;
  box-shadow: 1px 3px 5px grey;
  height: 20px

 }
.logintext:focus {
  border: 1px solid #2196F3;
  /*width: 100%*/
}
.signup{
	padding: 10px;
	text-align: center;
	float: right;
	border: none;
	border-radius: 12px;
}
.signin{
	padding: 5px;
	border: none; 
	width:70% ;
	box-shadow: 1px 3px 5px grey;
	border-radius: 12px;
	padding: 14px;
	font-size: 14px;
}
.signin:hover{
	background-color: #2196F3;
	color: white
}
.signup:hover{
	background-color: #0000ff;
	color: white;
	box-shadow: 1px 3px 5px grey;
}
.submitcls{
	margin-left:50px; 
}
	</style>

<?php //php code start

if(isset($_POST['doctor_y'])) {
	$User= "Doctor";
	$action='medicsportal.php';
}
else if(isset($_POST['patient_x'])){
	$User="Patient";
	$action='patient.php';
} 
else if(isset($_POST['pharmacist_x'])) {
	$User="Pharmacist";
}
else
	$User="";
//end?> 

<!-- <?php

	if(isset($_POST['Doctor'])){

		// $e_admin=$_POST['email'];
		// $p_admin=$_POST['password'];
	if($_POST['email']=="admin" && $_POST['password']=="admin")
	{
		 // header( 'Location: http://localhost/Clinic/medicsportal.php' );
	}
	else {
		?>
			<script type="text/javascript">
				alert("Email or Password does not match");
			</script>

		<?php

	}
	
}
    else if (isset($_POST['Patient'])){
    	$e_patient=$_POST['email'];
		$p_patient=$_POST['password'];
		$conn = mysqli_connect("localhost","root","","clinic");
		$sql="SELECT * FROM register WHERE email='$e_patient' AND password='$p_patient'";
		$result=$conn->query($sql);
		if (mysqli_num_rows($result) > 0){
			// header( 'Location: http://localhost/Clinic/patient.php' );
		}
		else{
	
			?>
			<script type="text/javascript">
				alert("Entered Email or Password is not Correct ... Please Try Again");
			</script>

		<?php
		}


    }

?> -->
<body>	
<form class="label" action="signup.php" method="POST">
<span >Medics Portal <input type="submit" class="signup"  name="signup" value="Signup"> </span>
</form>

<span class="label" id="labelLogin">Login as <?php echo $User ?>
</span>
<?php 
	if ($User == ""){
		?>
			<style type="text/css">
				.loginContainer{
					display: none;
				}
			</style>
		<?php
	}

?>

<div class="loginContainer">
	<form action="<?php echo $action ?>" method="POST">
		Email:<br><br><input class="logintext"  type="text" id="email" name="email" value="" size="20"><br>
		<br>
		Password:<br><br><input class="logintext" type="password" id="password" name="password" ><br>
		<br>
		  <div class="submitcls">
		      <input type="submit" class="signin" id="submit" name="<?php echo $User ?>" value="Submit">
	      </div>
	</form>
</div>
<form action="User.php" method="POST">
<div class="btn-group">

	<div>
		<input class="image" type="image" name="pharmacist" src="pharmacist.png"><label>Pharmacist</label>	
	</div>
	<div>
		<input class="image" type="image" name="doctor" src="doctor.jpg"><label>Doctor</label>	
	</div>
	<div>
		<input class="image" type="image" name="patient" src="Patient.png"><label>Patient</label>	
	</div>
</div>
</form>
<script type="text/javascript">
	document.getElementById("submit").addEventListener("click",validate)
function validate(){
	let u=document.getElementById("email").value;
	let p=document.getElementById("password").value;
	if(u==""){
		alert("Email Missing");
	}
	if(p==""){
		alert("Password Missing");
	}
	return true;
}
</script>

</body>
</html>