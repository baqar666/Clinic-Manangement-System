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
}
#labelLogin{
	width: 340px;
	align-self:center;
	margin-bottom: 200px;
}
.Userdiv {	
	background-color: white;
	border-radius: 50%;
}
	</style>


<body>	

<span class="label">Medics Portal</span>

<span class="label" id="labelLogin">Login</span>

<form action="User.php" method="POST">
<div class="btn-group">

	<div>
		<input class="image" type="image" name="pharmacist" src="pharmacist.png"><label>Pharmacist</label>	
	</div>
	<div>
		<input class="image" type="image" name="doctor" src="doctor.jpg"><label>Doctor</label>	
	</div>
	<div  >
		<input class="image" type="image" name="patient" src="Patient.png"><label>Patient</label>	
	</div>
</div>
</form>
</body>
</html>