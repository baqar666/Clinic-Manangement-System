<!DOCTYPE html>
<html>
<head>
	<title>doctor_priscription</title>
</head>
<style type="text/css">


 body{
    	display: flex;
    	flex-direction: column;
    	background-image: url(images.jfif);
    	background-repeat: no-repeat;
    	background-position: center;
    	background-size: cover;
        align-items: center;
    }	
 .uperlabel

{
	color: white;
	padding: 4px;
	font-family: Arial;
	background-color:  #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 100%;
	margin-top:20px; 
}
.signname:focus
{
   border:1px solid #2196F3;
}
.Priscription{
	color: white;
	padding: 8px;
	font-family: Arial;
	background-color: #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 30%;
	margin-top: 20px;
}{
	color: white;
	padding: 8px;
	font-family: Arial;
	background-color: #2196F3;
	opacity: 0.5; 
	font-size: 20px;
	text-align: center;
	width: 30%;
	margin-top: 20px;
}
input[type="text"],textarea{
	background-color: white;
	border-radius: 10px;
	resize: none;
	border: none;
	width: 200px;
	margin-top: 30px;

}
.signname{
	margin-top: 5px;
    border:none;
    box-shadow: 1px 3px 5px grey;
    height: 20px;
    box-sizing: border-box;
    margin: 8px;
    border-radius: 8px;
}
.signname:focus{
   border:1px solid #2196F3;
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
	
	width: 200px;
}
.signout
{
float:right;


}

</style>


 <!-- <?php
    if(isset($_POST['view_x'])){

        ?>

        <style type="text/css">

        	.signupbtn{
        		display: none;
        	}
        </style>
        <?php
    }
    
?> -->
<body>
<?php 
if(isset($_POST['Doctor'])){

		$e_admin=$_POST['email'];
		$p_admin=$_POST['password'];
	if($e_admin=="admin" && $p_admin=="admin"){

	}
		 // header( 'Location: http://localhost/Clinic/medicsportal.php' );
	else {
		
		?>
			<script type="text/javascript">
				alert("Email or Password does not match");
			</script>

		<?php
		 header( 'Location: http://localhost/Clinic/user.php' );

	}
	
}

?>


<form class="uperlabel" action="user.php" method="POST">
<span >MEDICS PORTAL <input class="signout" type="submit" name="signout" value="signout"></span>
</form>
<span id="PriscriptionLabel" class="Priscription">Doctor Prescription Pad</span>
<form action="doctor_menu.php" method="POST">
<div class="div">
<table style="width:100%">
	
<!-- 		<?php
  $conn = mysqli_connect("localhost","root","","clinic");
   
  
  if(isset($_POST['medics'])){
  	?>
       <tr>
			
			 <th>Name</th>
    <th>Email</th>
    <th>Address</th>
		</tr> <br>
		<?php  	
  	$email=$_POST['email'];
  $sql="SELECT * FROM register WHERE email='$email'";
  	$result=$conn->query($sql);
       	if (mysqli_num_rows($result) > 0) {
  // output data of each row
	 		while($row = mysqli_fetch_assoc($result)) {
		?> 

		<tr>
			<td><?php echo $row['name'];?></td>
    		<td><?php echo $row['email'];?></td>
    		<td><?php echo $row['address'];?></td>
		</tr>
		<br>

		<?php
		// $i++;
	}
}
else 
	echo "No Record Found";
}
?> -->

<!-- <?php 
	
  $sql="SELECT * FROM register";
 		$result=$conn->query($sql);
       	if (mysqli_num_rows($result) > 0) {
  // output data of each row
	 		while($row = mysqli_fetch_assoc($result)) {
		?> 

		<tr>
			<td><?php echo $row['name'];?></td>
    		<td><?php echo $row['email'];?></td>
    		<td><?php echo $row['address'];?></td>
		</tr>
		<br>

		<?php
		// $i++;
	}
}

?> -->




		
		</table>

E-mail:
<br>
<input class="signname" type="text" name="email">
<br>
 <!--  Prescription:
<br>
<textarea name="prescription" cols="25" rows="7" ></textarea> -->
<input class="signupbtn" type="submit" name="medics">
 </div>
</form>
</body>
</html>