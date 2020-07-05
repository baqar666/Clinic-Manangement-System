<?php
    $conn = mysqli_connect("localhost","root","","clinic");

    if(isset($_POST['Submit'])){
     $full_name=$_POST['fullName'];
       // echo implode('fullName', $_POST);
     $father_name=$_POST['fathername'];
     $age=$_POST['age'];
     $cnic=$_POST['cnic'];
     $email=$_POST['email'];
     $phone_no=$_POST['phone_no'];
     $gender=$_POST['country'];
     $password=$_POST['password'];
     $address=$_POST['textarea'];
     
     $sql="INSERT INTO register(name,father_name,age,cnic,email,phone_no,gender,password,address) VALUES ('$full_name','$father_name','$age','$cnic','$email','$phone_no','$gender','$password','$address')";
     
     echo $sql;
     echo $conn->query($sql);
     // header( 'Location: http://localhost/Clinic/user.php' ) ;
    }
?>