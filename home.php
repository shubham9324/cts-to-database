
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='utf8'>
<meta name='viewport' content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/glyphicon.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="css/iconstyle.css">
<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Galada" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
<script src="js/jqery.js"></script>
<script src="js/proper.js"> </script>
<script src="js/bootstrap.js"> </script>
<script src="js/homecreation.js"> </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="amcharts/amcharts/amcharts.js"></script>
<script src="amcharts/amcharts/serial.js"></script>
<script>
$(document).ready(function(){
	$(".loader").fadeOut(4000)

	$(".hide").click(function(){
		$(".opr").hide();
	});
});
</script>
<style>
.loader{ position: fixed;left: 0px;top: 0px;width:100%;height:100%;z-index: 9999;background: url(images/slack_load.gif) 50% 50% no-repeat rgb(249,249,249);}

</style>
</head>
<body>
<div class="loader"></div>
<?php
include("connection.php");
session_start();
$profile=$_SESSION['name'];
if($profile==true)
{

}
else{
header('location:login.php');
}
$query="SELECT * FROM register WHERE email='$profile'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
echo "WELCOME"." ".$result['name'];

?>
<nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
<a class="navbar-brand" href="#"><h1 style="font-size:30px;">LOGO</h1></a>
<button type="button"class="navbar-toggler"data-toggle="collapse"data-target="#colap">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse"id="colap">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link" href="#"style="font-family: 'Lato', sans-serif;font-size:19px;"><b>HOME &nbsp &nbsp</b></a></li>
<li class="nav-item"><a class="nav-link" href="#call"style="font-family: 'Lato', sans-serif;font-size:19px;"><b>CONTACT &nbsp &nbsp</b></a></li>
<li class="nav-item"><a class="nav-link" href="terms of use.php"style="font-family: 'Lato', sans-serif;font-size:19px;"><b>TERMS OF USE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></a></li>
<li class="nav-item "><a class=" btn btn-danger"href="logout.php"><b>Log Out</b></a></li>
</ul>
</div>
</nav>
<div class=" container-fluid img-responsive"style="background:url(images/mountain.jpg);background-position:center center;background-size:cover;no repeat;background-attachement:fixed;"><!--body section first  image-->
<div class="row">
<div class="col-sm-1" ></div>
<div class="col-sm-10 text-center" style="padding:130px 90px;">
  <div class="CONTAINER">
<p class=" font-weight-bold "style="font-size:40px;color:white;font-family: 'Merriweather Sans', sans-serif;">Transfer your <b>CSV</b> file data into your <b>DATABASE</b>...</p>
</div>
<div class="col-sm-1" ></div>
</div>
</div>
</div><!--End of body section first  image-->
<div class="container">
<div class="row">
<div class="col-sm-4"></div>
<div class="col-sm-4" style="margin-top:30px;">
<form  method="POST" enctype="multipart/form-data">
<div class="form-group">
<input class="form-control" type="file" name="myfile">
</div>
<div class="form-group">
<input type="submit" class="form-control btn btn-primary" name="submit" value="UPLOAD" accept="image/*">
</div>
</form>
</div>
<div class="col-sm-4"></div>
</div>
</div>
<div class="container-fluid"><!--AMCHARTS start-->
<div class="row"><!--ROW START-->
<div class="col-lg-1 col-xs-1"><a class="btn btn-primary btn-lg"href="home.php">SHOW</a>
</div>
<div class="col-lg-10 col-xs-10">
	<?php
$result="SELECT * FROM result ";
$query=mysqli_query($conn,$result);
$data=mysqli_num_rows($query);
if($data!=0){}
else{
	?>

	<?php
}
	?>
	<table class="table table-hover table-bordered ">
	<thead>
	<tr>
	<th>S.NO &nbsp</th>
	<th>NAME &nbsp</th>
	<th>ROLL NO &nbsp</th>
	<th>MATHS &nbsp</th>
	<th>ENGLISH &nbsp</th>
	<th>PHYSICS &nbsp</th>
	<th>CHEMISTRY &nbsp</th>
	<th>HINDI &nbsp</th>
	<th>TOTAL &nbsp</th>
	<th>STATUS &nbsp</th>
	</tr>
	</thead>
	<?php

	while($final= mysqli_fetch_assoc($query))
	{
  echo "<tbody class='opr'><tr>
		<td>".$final['sno']."</td>
		<td>".$final['name']."</td>
		<td>".$final['roll']."</td>
		<td>".$final['maths']."</td>
		<td>".$final['english']."</td>
		<td>".$final['physics']."</td>
		<td>".$final['chemistry']."</td>
		<td>".$final['hindi']."</td>
		<td>".$final['total']."</td>
		<td>".$final['status']."</td>
		</tr></tbody>";
	}

?>
</table>
</div>
<div class="col-lg-1 col-xs-1"><button class="btn btn-primary btn-lg hide">HIDE</button></div>
</div><!--END OF ROW-->
</div><!--END of AMCHARTS start-->
<div class="container-fluid"style="background:#333333;padding:50px 0;"><!--FOOTER-->
  <div class="container">
  <div class="row">
<div class="col-md-4 col-sm-12" id="call">
<h3 style="color:white;"class="text-center">Contact us</h3>
<div class=" text-warning text-center"style="">
<span class="glyphicon glyphicon-earphone"style="font-size:26px;"><p style="font-size:23px;">9910470412</p></span><br>
<span class="glyphicon glyphicon-envelope"style="font-size:26px;"><p style="font-size:23px;">sharmashiv972@gmail.com</p></span>
</div>
</div>
<div class="col-md-4 col-sm-12 text-center"style="color:white">
</div>
<div class="col-md-4 col-sm-12 text-center"style="color:white;">
<h3>Partner with us</h3>
<div class="text-center"style="font-size:20px;">
<a href="terms of use.php"style="color:white">Terms of Use</a><br>
<a href="login.php"style="color:white">Login</a><br>
<a href="register.php"style="color:white">Register</a>
</div>
</div>
</div>
<div class="row"style="margin-top:40px;">
<div class="col-sm-3 text-left"></div>
<div class="col-sm-6 text-left  wrapper">
 <ul style="list-style:none;">
  <li><a href="#"><i class="fab fa-facebook-f fa-2x aria-hidden='true'"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter fa-2x aria-hidden='true'"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram fa-2x aria-hidden='true'"></i></a></li>
  <li><a href="#"><i class="fab fa-youtube fa-2x aria-hidden='true'"></i></a></li>
  <li><a href="#"><i class="fab fa-google fa-2x aria-hidden='true'"></i></a></li>
  </ul><br><br>
  <small>©Your Website 2018. All Rights Reserved</small>
</div>
<div class="col-sm-3 "></div>
  </div>
</div>
</div><!--END OF FOOTER-->
<?php

	if(isset($_POST["submit"])){
		$filename=$_FILES['myfile']['name'];
		$fileext=explode('.',$filename);
		$fileext=strtolower(end($fileext));
		if($fileext=='csv'){
			$handle=fopen($_FILES['myfile']['tmp_name'], "r");
			while($data=fgetcsv($handle)){
				$item0=mysqli_real_escape_string($conn,$data[0]);
				$item1=mysqli_real_escape_string($conn,$data[1]);
				$item2=mysqli_real_escape_string($conn,$data[2]);
				$item3=mysqli_real_escape_string($conn,$data[3]);
				$item4=mysqli_real_escape_string($conn,$data[4]);
				$item5=mysqli_real_escape_string($conn,$data[5]);
				$item6=mysqli_real_escape_string($conn,$data[6]);
				$item7=mysqli_real_escape_string($conn,$data[7]);
				$item8=mysqli_real_escape_string($conn,$data[8]);
				$item9=mysqli_real_escape_string($conn,$data[9]);
				$sql="INSERT INTO result(sno,name,roll,maths,english,physics,chemistry,hindi,total,status) values('$item0','$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9')";

				$run=mysqli_query($conn,$sql);

					?>
				<script> swal("Congo", "File uploaded Successfully!", "success");
				</script>
				<?php


			}
			fclose($handle);
		}
		else{?>
			<script> swal("Oops", "Please Upload only CSV File!", "error");</script>
			<h3 class="text-danger text-center">NO DATA IN TABLE</h3>
		<?php }
	}
?>
</body>
</html>
