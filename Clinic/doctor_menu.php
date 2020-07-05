<!DOCTYPE html>
<html>
<head>
	<title>Doctor Menu</title>
</head>
<style type="text/css">
	body{
            display: flex;
			flex-direction: column;
			background-image: url('doctor_cover.jpg');
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
	padding: 12px;
	margin-top: 70px;

	/*align-self: center;*/
}
	.image {
	display: flex;
	border-radius: 50%;
	height: 90%;
	width: 100%;
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
input[type="text"],textarea{

	background-color: white;
	border-radius: 10px;
	resize: none;
	border: none;
	width: 200px;
	margin-top: 30px;
    margin-left: 50px;
}
.signupbtn{
	padding: 8px;
	margin-top: 10px;
	width: 50%;
	background-color: skyblue;
	color: black;
	margin: 50px;
	border-radius: 12px;
    right: 50px;
}
.div{

	margin-top: 50px;
	align-items: center;
	
}
.dive{
	color: black;
	width: 100px;
	margin-top:20px; 
}
.cancel
{
float: right;



}




</style>
<!-- <?php

if(isset($_POST['cancel']))
header( 'Location:http://localhost/Clinic/medicsportal.php' );

?> -->


     

<body>
	<form  class="uperlabel" action="medicsportal.php" method="POST"> 
		<span >Medics Portal<input class="cancel" type="submit" name="cancel" value="cancel"></span>
	</form>
	
	<span class="label">Doctor Menu</span>

<form action="doctor_menu.php" method="POST">

	<div class="dive">

		<label > Patient's Email</label><input  type="text"  name="email" value="<?php echo $_POST['email'] ?>" >
	</div>
	 <?php
      $add="";
      if(isset($_POST['add_pre'])){
      	 $conn = mysqli_connect("localhost","root","","clinic");
		 $email=$_POST['email'];
		 $prescription=$_POST['prescription'];
		 $sql="INSERT INTO prescription (email,prescription) VALUES ('$email','$prescription')";
		 $conn->query($sql);
      }
      else{

      }


      if(isset($_POST['add_y'])){
      	 ?>
      	 <!-- <div class="dev"> -->
      	 <textarea name="prescription" cols="25" rows="7" ></textarea>
      	 <input class="signupbtn" type="submit" name="add_pre">
      	<!-- </div> -->
      	 <style type="text/css">
      	 	.image{
      	 		display: none;
      	 	}
			.labelHide{
      	 		display: none;
      	 	}
      	 </style>
      	 <?php
      	}

      else if(isset($_POST['view_x'])){	
  $conn = mysqli_connect("localhost","root","","clinic");
   
  
  // if(isset($_POST['view_x'])){
  	?>
  	   <style type="text/css">
  	   	.image{
  	   		display: none;
  	   	}

			.labelHide{
      	 		display: none;
      	 	}
  	   </style>
       <tr>
			
			 <th>Sr</th>
    <th>Prescription</th>
		</tr> <br>
		<?php  	
  	$email=$_POST['email'];
  $sql="SELECT * FROM prescription WHERE email='$email'";
  	$result=$conn->query($sql);
       	if (mysqli_num_rows($result) > 0) {
  // output data of each row
   			$i=0;
	 		while($row = mysqli_fetch_assoc($result)) {
	 			$i++;
		?> 

		<tr>
		    <td><?php echo $i;?></td>
     		<td><?php echo $row['prescription'];?></td>
    	</tr>
		<br>

		<?php
		// $i++;
	}
}
// }
}
else 
	{
		 $conn = mysqli_connect("localhost","root","","clinic");
		 $email=$_POST['email'];
		 $sql="SELECT * FROM register WHERE email='$email'";
		 $result=$conn->query($sql);
		 if(mysqli_num_rows($result) > 0){
		 	while($row = mysqli_fetch_assoc($result)) {
		 		$name=$row['name'];
		 	}
		 	?>
				<label > Patient's Name : <?php echo $name?>
			<?php	
		 }
		 else{
		 	echo "No email found ... Please register your email first";
		 		?>
			  	   <style type="text/css">
			  	   	.image{
			  	   		display: none;
			  	   	}

						.labelHide{
			      	 		display: none;
			      	 	}
			  	   </style>
		  	   <?php

		 }
	}

?> 
	<!-- <div>
		<input class="image" type="image" name="remove" src="remove.jpg"><label>Remove Data</label>	
	</div -->
	<div class="btn-group">
	<div>
		<input class="image" type="image" name="view" src="update.jpg"><label class="labelHide">View prescription </label>	
	</div>
	<div>
		<input id="pre" class="image" type="image" name="add" src="pre.jpg"><label class="labelHide">ADD prescription</label>	
	</div>
</div>
</form>
</body>
</html>