<?php
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/glyphicon.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<link rel="stylesheet" href="css/loginstyle.css">
<script src="js/jquery.js"></script>
<script src="js/proper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>
$('document').ready(function(e){
$(".loader").fadeOut(4000)});
</script>
<style>
.loader{ position: fixed;left: 0px;top: 0px;width:100%;height:100%;z-index: 9999;background: url(images/slack_load.gif) 50% 50% no-repeat rgb(249,249,249);}

</style>
</head>
<body style=" background: url(images/mountain.jpg);background-position:center center;background-size:cover; no-repeat ;background-attachement:fixed;opacity:0.9;">
<div class="loader"></div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4"></div>
<div class="col-lg-4 col-md-4 col-sm-4 border-primary" style="border:2px solid ;width=40px;margin-top:40px;background:rgba(0,0,0,0.5);">
<div class="mystyle text-center"><i class="fas fa-user "></i></div>
<form  action="" style="padding:25px;margin-left:0px;"onsubmit="return checkRegistration()"method="POST">
<div><h1 style="text-align:center;color:white;">LOGIN</h1>
</div>
<div class="form-group"><span class="glyphicon glyphicon-envelope" style="font-size:20px;color:white;"></span> <label class="text-primary"><b style="font-size:22px;">&nbsp E-MAIL ID:</b></label>
<input type="email" class="form-control" placeholder="Email" id="em"name="email"/><span id="sem" class="text-danger font-weight-bold"></span>
</div>
<div class="form-group"><span class="glyphicon glyphicon-lock" style="font-size:20px;color:white;"></span> <label class="text-primary"><b style="font-size:22px;">&nbsp PASSWORD:</b></label>
<input type="password" class="form-control" placeholder="Password" id="ps"name="pass"/><span id="sps" class="text-danger font-weight-bold"></span>
</div>
<div class="form-group form-check"><label class="form-check-label " style="color:white;font-size:18px;">
<input class="form-check-input"type="checkbox" >Remember me</label>
</div>
<div class="form-group" style="margin-top:15px;">
<button type="submit" class="btn btn-primary btn-block"style="font-size:25px;"name="submit">LOGIN</button>
<div style="margin-top:15px;">

<span id="sn" class="text-danger font-weight-bold" ></span>
</div>
</div>
</form>
</div>
<div class="col-lg-4 col-md-4 col-sm-4 text-right">
<a class="btn btn-primary btn-lg" href="register.php" style="margin-top:15px;">Sign Up</a>
</div>

</div><!--end of row-->
</div><!--end of cointainer-->
<script>
function checkRegistration()
{
var echeck= /^[A-Za-z_0-9]{3,}@[a-z]{3,}[.]{1}[A-Za-z.]{2,6}$/;
var pcheck= /^[A-Za-z0-9 .@#$%^&*?+!]{5,}$/;
var e=document.getElementById('em').value;
var p=document.getElementById('ps').value;
if(echeck.test(e)){
document.getElementById('sem').innerHTML="";
}else{
document.getElementById('sem').innerHTML="**EMAIL IS NOT VALID";
return false;
}
if(pcheck.test(p)){
document.getElementById('sps').innerHTML="";
}else{
document.getElementById('sps').innerHTML="**PASSWORD IS NOT VALID";
return false;
}

}
</script>
<?php

if(isset($_POST['submit']))
{
$em = $_POST['email'];
$ps = $_POST['pass'];
$query="SELECT * FROM register WHERE email='$em' && pass='$ps'";
$total=mysqli_query($conn,$query);
$result=mysqli_num_rows($total);

if($result==1)
{
	$_SESSION['name']=$em;
    header('location:home.php');
}
else
{?>
<script> swal("Oops", "Email or Password doesn't matched!", "error");</script>
<?php
}
}
?>
</body>
</html>
