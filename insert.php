<html>
<!DOCTYPE html>
<html>
<body>
<?php
include("connection.php");
error_reporting(0);
$name=$email=$phone=$pass=$cpass="";
	$name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pass  = $_POST['password'];
    $cpass = $_POST['cpassword'];
	
          $ins="INSERT INTO register VALUES('$name','$email','$phone','$pass','$cpass')";
          $data=mysqli_query($conn,$ins);
             if($data)
			 {
	             header('location:login.php');
             }
	

?>
</body>
</html>