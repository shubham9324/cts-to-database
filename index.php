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
<script src="js/jqery.js"></script>
<script src="js/proper.js"> </script>
<script src="js/bootstrap.js"> </script>
<script>
$('document').ready(function(e){
  $(".loader").fadeOut(4000)
  $(".sld").slideDown(1200)
$(".fdbt").fadeIn(2000)
  $(window).scroll(function(){
    $("#fade").fadeIn(4000);
    $("#fade1").fadeIn(4000);
    $("#fade2").fadeIn(4000);
    $(".slideDown").slideDown(3500);

  });

});
</script>
<style>
.loader{ position: fixed;left: 0px;top: 0px;width:100%;height:100%;z-index: 9999;background: url(images/slack_load.gif) 50% 50% no-repeat rgb(249,249,249);}

</style>
</head>
<body>
  <div class="loader"></div>
  <nav class="navbar navbar-expand-md bg-primary navbar-dark fixed-top">
    <a class="navbar-brand"href="#"><img src="images/avtar.png"style="width:40px"/>&nbsp &nbsp</a>
    <button type="button" class="navbar-toggler"data-toggle="collapse"data-target="#colap">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse"id="colap">
    <ul class="navbar-nav">
        <li class="nav-item "><a class="nav-link"href="home.php"style="font-family: 'Lato', sans-serif;font-size:19px;"><b>HOME &nbsp &nbsp</b></a></li>
      <li class="nav-item "><a class="nav-link"href="#call"style="font-family: 'Lato', sans-serif;font-size:19px;"><b>CONTACT US &nbsp &nbsp</b></a></li>
      <li class="nav-item "><a class="nav-link"href="terms of use.php"style="font-family: 'Lato', sans-serif;font-size:19px;"><b>TERMS OF USE &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></a></li>
	  <li class="nav-item "><a class=" btn btn-light"href="login.php"><b class="text-primary">SIGN IN</b></a></li>
   </ul>
   </div>
  </nav>

<div class=" container-fluid img-responsive"style="background:url(images/mountain.jpg);background-position:center center;background-size:cover;no repeat;background-attachement:fixed;"><!--body section first  image-->
<div class="row">
<div class="col-sm-1" ></div>
<div class="col-sm-10 text-center" style="padding:130px 90px;">
  <div class="CONTAINER">
<p class=" font-weight-bold sld"style="font-size:40px;color:white;display:none;font-family: 'Merriweather Sans', sans-serif;"><b>Do you want to transfer your CSV file into your DATABASE ??</b></p>
</div>
<div class="text-center">
<a href="register.php"class="btn btn-primary btn-lg fdbt"style="font-family: 'Lato', sans-serif;"><b>Sign up!</b></a>
</div>
<div class="col-sm-1" ></div>
</div>
</div>
</div><!--End of body section first  image-->
<div class="container-fluid"><!--Icon section-->
<div class="row"><!-- ROW  icon-->
<div class="col-lg-4 col-md-12 text-center"style="background-color:#f9f9f9;padding:50px 0;"><!--Computer icon-->
  <div class="container-fluid text-center">
<span class="glyphicon glyphicon-blackboard text-primary" style="font-size:90px;color:white;text-align:center;"></span>
<h1  style="font-size:25px;padding:7px 0;display:none;font-family: 'Merriweather Sans', sans-serif;"id="fade"><b>FULLY RESPONSIVE</b><h1>
<div style="height:80px;line-height:20px;word spacing:20px;margin-left:25px;margin-top:-5px;">
<small style="font-size:20px;font-family: 'Roboto', sans-serif;font-style:normal;">This theme will look great on any device, no matter the size!</small>
</div>
</div>
</div><!--END of Computer icon-->
<div class="col-lg-4 col-md-12 text-center"style="background-color:#f9f9f9;padding:50px 0;"><!--Cloud icon-->
  <div class="container-fluid">
<span class="glyphicon glyphicon-cloud text-primary" style="font-size:90px;color:white;text-align:center;"></span>
<h1 style="font-size:25px;margin-left:15px;padding:7px 0;display:none;font-family: 'Merriweather Sans', sans-serif;"id="fade1"><b>ACCESS FROM ANYWHERE</b><h1>
<div style="height:80px;line-height:18px;word spacing:30px;margin-left:10px;margin-top:-5px;">
<small style="font-size:20px;font-family: 'Roboto', sans-serif;font-style:normal;">You can access your data from anywhere at anytime!</small>
</div>
</div>
</div><!--END of Cloud icon-->
<div class="col-lg-4 col-md-12 text-center"style="background-color:#f9f9f9;padding:50px 0;"><!--Right icon-->
  <div class="container-fluid">
<span class="glyphicon glyphicon-ok text-primary" style="font-size:90px;color:white;text-align:center;"></span>
<h1 style="font-size:25px;margin-left:15px;padding:7px 0;display:none;font-family: 'Merriweather Sans', sans-serif;"id="fade2"><b>EASY TO USE</b><h1>
<div style="height:80px;line-height:20px;word spacing:20px;margin-left:40px;margin-top:-5px;">
<small style="font-size:20px;font-family: 'Roboto', sans-serif;font-style:normal;">Ready to use with your own content, or customize the source files!</small>
</div>
</div>
</div><!--END of Right icon-->
</div><!--END of ROW  icon-->
</div><!--END of Icon section-->
<div class="container-fluid slideDown" style="display:none;"><!--Text with Image1-->
<div class="row" ><!-- ROW  Text with image-->
<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left"style="padding:105px 90px;"><!--Text start-->
<h1  style="font-size:35px;font-family: 'Merriweather Sans', sans-serif;">Fully Responsive Design</h1>
<p style="font-size:20px;line-height:30px;word spacing:20px;font-family: 'Roboto', sans-serif;font-style:normal;"><i>When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</i>
</p>
</div><!--END of text-->
<div class="col-lg-6 col-md-6 col-sm-12 col-12 img-responsive"style="background-image: url(images/phone.jpg);background-position: center;background-size:cover;no repeat;background-attachement:fixed;"><!--Image start-->

</div><!--END of image-->
</div><!--END of ROW  Text with image-->
</div><!--END of Text with Image1-->
<div class="container-fluid slideDown" style="display:none;" ><!--Text with Image2-->
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-12 img-responsive"style="background-image:url(images/code.jpg);background-position:center center;background-size:cover;no repeat;background-attachement:fixed;"><!--Image start-->
</div><!--END of image-->
<div class="col-lg-6 col-md-6 col-sm-12 col-12"><!--Text start-->
  <div class="container text-left"style="padding:105px 90px;">
<h1 style="font-size:35px;font-family: 'Merriweather Sans', sans-serif;">Updated For Bootstrap 4</h1>
<div style="line-height:30px;word spacing:20px;">
<p style="font-size:20px;font-family: 'Roboto', sans-serif;font-style:normal;"><i>Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</i>
</p>
</div>
</div>
</div><!--END of text-->
</div>
</div><!--END of Text with Image2-->
<div class="container-fluid slideDown" style="display:none;"><!--Text with Image3-->
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-12 text-left"style="padding:105px 90px;"><!--Text start-->
<h1 style="font-size:35px;font-family: 'Merriweather Sans', sans-serif;">Easy to Use & Customize</h1>
<p style="font-size:20px;line-height:30px;word spacing:20px;font-family: 'Roboto', sans-serif;font-style:normal;"><i>Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</i>
</p>
</div><!--END of text-->
<div class="col-lg-6 col-md-6 col-sm-12 col-12 img-responsive"style="background-image:url(images/boy.jpg);background-position: center;background-size:cover;no repeat;background-attachement:fixed;"><!--Image start-->
</div><!--END of image-->
</div>
</div><!--END of Text with Image3-->
<div class="container-fluid"style="background:#f9f9f9;">
<div class="row">
  <div class="col-sm-12"style="padding:130px 0px 30px 0px;">
    <h1 class="text-center"style="font-family: 'Merriweather Sans', sans-serif;">What people are saying...</h1>
  </div>
</div>
<div class="row text-center trans">
  <div class="col-lg-4 col-md-4 col-sm-10 col-12">
    <figure class="figure">
<img src="images/pass1.jpg" class="figure-img img-fluid rounded-circle " height="250px" width="250px">
<figcaption>
  <h4>GEORGE</h4>
  <p class="figure-caption">Thanku so much it is very helpful for completing my work</p>
</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-10 col-12">
  <figure class="figure">
<img src="images/_MG_7490.jpg"class="figure-img img-fluid rounded-circle"height="250px" width="250px">
<figcaption>
<h4>Shubham Mishra</h4>
<p class="figure-caption">Thanku so much its just complete my work in seconds</p>
</figcaption>
</figure>
</div>
<div class="col-lg-4 col-md-4 col-sm-10 col-12">
  <figure class="figure">
<img src="images/pass2.jpg"class="figure-img img-fluid rounded-circle"height="250px" width="250px">
<figcaption>
<h4>KELVIN</h4>
<p class="figure-caption">Hey its awesome one thankss...</p>
</figcaption>
</figure>
</div>
</div>
</div>
<div class=" container-fluid img-responsive"style="background:url(images/mountain.jpg);background-position:center center;background-size:cover;no repeat;background-attachement:fixed;"><!--body section first  image-->
<div class="row">
<div class="col-sm-1" ></div>
<div class="col-sm-10 text-center" style="padding:90px 90px;">
  <div class="CONTAINER">
<p class=" font-weight-bold "style="font-size:40px;color:white;font-family: 'Merriweather Sans', sans-serif;">Ready to get started? Sign up now!</p>
</div>
<a href="register.php"class="btn btn-primary btn-lg" >Sign up!</a>
</div>
<div class="col-sm-1" ></div>
</div>
</div><!--End of body section first  image-->
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
</body>
</html>
