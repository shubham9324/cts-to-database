<?php
include("connection.php");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/glyphicon.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="js/jquery.js"></script>
<script src="js/proper.js"></script>
<script src="js/bootstrap.js"></script>
<script>
$('document').ready(function(e){
	$(".loader").fadeOut(4000);
});
</script>
<style>
.loader{ position: fixed;left: 0px;top: 0px;width:100%;height:100%;z-index: 9999;background: url(images/slack_load.gif) 50% 50% no-repeat rgb(249,249,249);}

</style>
</head>
<body style="background:url(images/mountain.jpg);background-position:center center;background-size:cover;background-attachment:fixed;opacity:0.9;">
  <div class="loader"></div>
<div class="container">
<div class="row">
<div class="col-lg-4"></div>
<div class="col-lg-4 border-primary"style="border:2px solid ;margin-top:13px;padding:-10px;background:rgba(0,0,0,0.5);">
<form action="insert.php"  method= "POST" onsubmit="return validation()">
<div>
<h1 style="text-align:center;color:white;font-size:30px;margin-top:5px;font-family: 'Merriweather Sans', sans-serif;">SIGN UP</h1>
</div>
<div class="form-group "><span class="glyphicon glyphicon-user"style="font-size:19px;color:white" > </span> <label class="text-primary" ><b style="font-family: 'Lato', sans-serif;font-size:20px;">&nbsp NAME:</b></label>
<input type="text" class="form-control" placeholder="Name" id="nm"name="name"value=""/><span id="snm" class="text-danger font-weight-bold" ></span>
</div>
<div class="form-group"><span class="glyphicon glyphicon-envelope"style="font-size:19px;color:white" > </span><label class="text-primary"><b style="font-family: 'Lato', sans-serif;font-size:20px;">&nbsp E-MAIL ID:</b></label>
<input type="email" class="form-control" placeholder="Email"id="em"name="email"value=""/><span id="sem" class="text-danger font-weight-bold"></span>
</div>
<div class="form-group"><span class="glyphicon glyphicon-earphone"style="padding:0px,10px;font-size:19px;color:white" > </span><label class="text-primary"><b style="font-family: 'Lato', sans-serif;font-size:20px;">&nbsp MOBILE NUMBER:</b></label>
<input type="text" class="form-control" placeholder="Mobile No."id="mm"name="phone"value=""/><span id="smm" class="text-danger font-weight-bold"></span>
</div>
<div  class="form-group"><span class="glyphicon glyphicon-lock"style="padding:0px,10px;font-size:19px;color:white" > </span><label class="text-primary"><b style="font-family: 'Lato', sans-serif;font-size:20px;">&nbsp PASSWORD:</b></label>
<input type="password" class="form-control" placeholder="Password"id="pm"name="password"value=""/><span id="spm" class="text-danger font-weight-bold"></span>
</div>
<div class="form-group"><span class="glyphicon glyphicon-lock"style="padding:0px,10px;font-size:19px;color:white"> </span><label class="text-primary"><b style="font-family: 'Lato', sans-serif;font-size:20px;">&nbsp CONFIRM PASSWORD:</b></label>
<input type="password" class="form-control" placeholder="Confirm Password"id="cm"name="cpassword"value=""/><span id="scm" class="text-danger font-weight-bold"></span>
</div>
<div class="form-group form-check"><label style="color:white;font-size:18px;"class="form-check-label ">
<input class="form-check-input" type="checkbox">Remember me</label>
</div>
<div class="form-group"style="margin:20px;">
<button type="submit" class="btn btn-primary btn-block"style="font-family: 'Lato', sans-serif;font-size:25px;" name="submit">SUBMIT</button>
</div>
</form>
</div>
<div class="col-lg-4">
<a href="login.php" class="btn btn-primary" style="margin-top:15px;margin-left:380px;font-family: 'Lato', sans-serif;font-size:18px;" >Sign in</a>
</div>
</div>
</div>
<script type="text/javascript">
function validation()
{
var e=document.getElementById('em').value;
var m=document.getElementById('mm').value;
var p=document.getElementById('pm').value;
var c=document.getElementById('cm').value;
var n=document.getElementById('nm').value;
var namecheck= /^[A-za-z .]{3,30}$/;
var mobilecheck= /^[789]{1}[0-9]{9}$/;
var emailcheck= /^[A-Za-z_0-9]{3,}@[a-z]{3,}[.]{1}[A-Za-z.]{2,10}$/;
var passcheck= /^[A-Za-z0-9 .@#$%^&*?+!]{5,}$/;
if (namecheck.test(n)){
document.getElementById('snm').innerHTML="";
}else{
document.getElementById('snm').innerHTML="**NAME IS NOT VALID";
return false;
}
if (emailcheck.test(e)){
document.getElementById('sem').innerHTML="";
}else{
document.getElementById('sem').innerHTML="**EMAIL IS NOT VALID";
return false;
}
if (mobilecheck.test(m)){
document.getElementById('smm').innerHTML="";
}else{
document.getElementById('smm').innerHTML="**MOBILE NO. IS NOT VALID";
return false;
}
if (passcheck.test(p)){
document.getElementById('spm').innerHTML="";
}else{
document.getElementById('spm').innerHTML="**PASSWORD IS NOT VALID";
return false;
}
if (c==p){
document.getElementById('scm').innerHTML="";
}else{
document.getElementById('scm').innerHTML="**PASSWORD IS NOT MATCHING";
return false;
}
}
</script>

</body>
</html>
