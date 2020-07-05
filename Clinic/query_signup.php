<?php
    $conn = mysqli_connect("localhost","root","","clinic");

  
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
     $prescription=$_POST['prescription'];
       if(isset($_POST['Submit_signup'])){
     $sql="INSERT INTO register(name,father_name,age,cnic,email,phone_no,gender,password,address) VALUES ('$full_name','$father_name','$age','$cnic','$email','$phone_no','$gender','$password','$address')";

     $sql1="INSERT INTO prescription(email) VALUES ('$email')";
     }
       else if(isset($_POST['update'])){
     $sql="UPDATE register SET name='$full_name',father_name='$father_name',age='$age',cnic='$cnic',phone_no='$phone_no',gender='$gender',password='$password',address='$address' WHERE email='$email'";   
            }
     // echo $sql;
        else if(isset($_POST['medics'])){
            $sql1="INSERT INTO prescription (prescription) VALUES('$prescription')";
        }
     echo $conn->query($sql);
     echo $conn->query($sql1);
     header( 'Location: http://localhost/Clinic/user.php' );
    

?>