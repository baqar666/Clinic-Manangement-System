<!DOCTYPE html>
<html>
<head>
	<title>Doctor Menu</title>
</head>
<style type="text/css">
	body{
            display: flex;
			flex-direction: column;
			background-image: url('patient.jpg');
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
	flex-direction: row;
	align-items:  center;
	justify-content: center;
	width:100px;
	height: 100px;
	overflow: hidden;
	margin-right: 10px;
	padding: 12px;
	margin-top: 50px;
	/*align-self: center;*/
}
	.image {
	display: flex;
	border-radius: 50%;
	height: 50%;
	width: 50%;
	background-color: white;

	/*width: 20%;*/
	/*overflow: hidden;*/
	/*flex-direction: column;*/
}
.image:hover{

	box-shadow: 2px 5px 5px 2px grey;
}
.uperlabel{
	color: white;
	padding: 8px;
	font-family: Arial;
	background-color: #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 100%;
	margin-top:20px; 
}
.label{
	color: white;
	padding: 8px;
	font-family: Arial;
	background-color: #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 40%;
	margin-top:20px; 
}
</style>

<?php
if (isset($_POST['Patient'])){
    	$e_patient=$_POST['email'];
		$p_patient=$_POST['password'];
		$conn = mysqli_connect("localhost","root","","clinic");
		$sql="SELECT * FROM register WHERE email='$e_patient' AND password='$p_patient'";
		$result=$conn->query($sql);
		if (mysqli_num_rows($result) > 0){
		}
		else{
			header( 'Location: http://localhost/Clinic/user.php' );
	
			?>
			<script type="text/javascript">
				alert("Entered Email or Password is not Correct ... Please Try Again");
			</script>

		<?php
		}


    }

?>



	<label > Patient's Email</label><input  type="text"  name="email" value="<?php echo $_POST['email'] ?>" >

<?php


		if(isset($_POST['remove1'])){
		$conn = mysqli_connect("localhost","root","","clinic");
  		$email=$_POST['email'];
     	$sql="DELETE FROM prescription WHERE email='$email'";
     	$conn->query($sql);
     }
?> 
<?php
  if(isset($_POST['remove_x'])){
  	 header( 'Location: http://localhost/Clinic/remove.php' );
  }
  else if(isset($_POST['update_y']))
  	header( 'Location: http://localhost/Clinic/update.php' );
?>
<body>
	<span class="uperlabel">Medics Portal</span>
	<span class="label">Patient Menu</span>
<div class="btn-group">
<form action="patient.php" method="POST">
	<div>
		<input class="image" type="image" name="remove" src="remove.jpg"
		onclick="<?php 	
						$conn = mysqli_connect("localhost","root","","clinic");
				  		$email=$_POST['email'];
				     	$sql="DELETE FROM prescription WHERE email='$email'";
				     	$conn->query($sql);

				?>
				alert('Data Deleted Successfully')
				"
		
		><label>Remove Data</label>	
	</div>
	<div>
		<input class="image" type="image" name="view" src="update.jpg"><label>View prescription </label>	
	</div>
	<div>
		<input  class="image" type="image" name="update" src="pre.jpg"><label>Update Data</label>	
	</div>
</div>
</form>
</body>
</html>