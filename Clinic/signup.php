<!DOCTYPE html>
<html>
<head>
	<title>SignUp</title>
</head>
<style type="text/css">
body ,html{
	height: 100%;
}
    body{
    	display: flex;
    	flex-direction: column;
    	background-image: url(backsignup.jpg);
    	background-repeat: no-repeat;
    	background-position: center;
    	background-size: cover;
        align-items: center;
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
.signup{
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
.signname{
	margin-top: 5px;
    border:none;
    font-size: 14px;
    box-shadow: 1px 3px 5px grey;
    height: 20px;
    margin: 8px;
    border-radius: 5px
}
.signname:focus{
   border:1px solid #2196F3;
}
select{
   width:50%;
   border:none;
   border-radius: 4px;
}
input[type="address"],textarea{
	 background-color: white;
    color: black;
    font-size: 14px;
    font-family: Arial;
    resize: none;
    width: 100%;
    border-radius: 10px;
    border:none;
	box-shadow: 1px 3px 5px grey;
}
.signname2{
	font-size: 14px;
	margin-top: 5px;
	border:none;
	box-shadow: 1px 3px 5px grey;
	width:100%;
	height: 20px;
	margin: 8px;
	border-radius: 5px
}
.signname2:focus{
	border: 1px solid #2196F3;
}
.signupbtn{
	padding: 14px;
	margin-top: 10px;
	width: 100%;
	border:none;
	background-color: white;
	color: black;
	border-radius: 12px;
	transition-duration: 0.4s ;
}
.signupbtn:hover{
     background-color: #1E90FF;
     color: white
}
.main{
	display: flex;
	flex-direction: row;
	justify-content: center;
	align-items: center;
}
.firsthalf{
	font-size: 20px;
	display: flex;
	flex-direction: column;
	align-items: flex-start;
}
.secondhalf{
	font-size: 20px;
    display: flex;
	flex-direction: column;
	align-items: flex-start;
	position: relative;
	left: 80px;
	top: 2px;
	
}
.submitcls{
	margin-top: 20px;
	margin-left: 30%; 
	width: 50%;

}

</style>
<?php 
	$fullname='';
    $fathername='';
    $age='';
    $cnic='';
    $phone_number='';
    $password='';
    $address='';
    $male='';
    $female='';
    $email='';
    $submit='Submit_signup';
    $Page="Sign Up";
    	if(isset($_POST['update'])){
		$conn = mysqli_connect("localhost","root","","clinic");
  		$email=$_POST['email'];
  		// $fullname['fullname']="";
		$Page='Update';
     	
    	$submit='update';
     	$sql="SELECT * from register WHERE email='$email'";
     	$result=$conn->query($sql);
       	if (mysqli_num_rows($result) > 0) {
  // output data of each row
	 		while($row = mysqli_fetch_assoc($result)) {
	 			$fullname=$row['name'];	
	 			$fathername=$row['father_name'];
	 			 $age=$row['age'];
                 $cnic=$row['cnic'];
                 $phone_number=$row['phone_no'];
                 // $Gneder=$row['gender'];
                 if($row['gender']=='Male')
                 	$male='selected';
                 else
                 	$female='selected';
                 $password=$row['password'];
                 $address=$row['address'];

			}
		}
	}
?>


<body>
<span class="uperlabel">MEDICS PORTAL </span>
<span class="signup"><?php echo $Page;?></span>
<form action="query_signup.php" method="POST">
<div class="main">
<div class="firsthalf"> 
Full Name:
<br>
<input class="signname" id="fullname" type="text" name="fullName" align="left" value="<?php echo $fullname;?>">
<br>
Father Name:
<br>
<input class="signname"type="text" name="fathername" value="<?php echo $fathername;?>">
<br>
Age:
<br>
<input class="signname "type="text" name="age" value="<?php echo $age;?>">
<br>
CNIC:
<br>
<input class="signname" type="text" name="cnic" value="<?php echo $cnic;?>">
<br>
E-mail:
<br>

<input class="signname" type="text" name="email"  value="<?php echo $email;?>">

</div>
<div class="secondhalf">
Phone NO:
<br>
<input class="signname2" type="text" name="phone_no" value="<?php echo $phone_number;?>">
<br>
Gneder:
<br>
<select class="signname2" id="county" name="country" value="<?php echo $gnder;?> ">
<option value="Male" <?php echo $male?> >Male</option>
<option value="Female" <?php echo $female?> >Female</option>
</select>
<br>
Password:
<br>
<input class="signname2" type="Password" name="password" value="<?php echo $password;?>">
<br>
Address:
<br>
<textarea name="textarea" cols="20" rows="5"> <?php echo $address;?> </textarea>
<br>
</div>
</div>
   <div class="submitcls">

       <input class="signupbtn" type="submit" name="<?php echo $submit;?>">
   </div>
</form>
<body>
 </body>
</html>