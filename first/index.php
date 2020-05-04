<!Doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- bootstrap -->

<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- font Awesome -->

<link rel="stylesheet" href="css/all.min.css">

<!-- google font -->

<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

<!-- custom css -->
<link rel="stylesheet" href="css/custom.css">
<title>first</title>
</head>
<body>
	
<!-- start Navigation -->

<nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
    <a href="index.php" class="navbar-brand">DK</a>
    <span class="navbar-text">I AM DHRUV</span>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
      <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
        <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
      </ul>
    </div>
    </nav> <!-- end Navigation -->


    <!-- start header jumbotron -->
    <header class="jumbotron back-image" style="background-image:url(images/Banner1.jpeg); ">
    	<div class="dclass myclass">
    		<h1 class="text-uppercase text-danger font-weight-bold">fkyigkbkgig</h1>
    		<p class="font-italic pclass">jfuygfgbggyg</p>
    		<a href="Requester/RequesterLogin.php" class="btn btn-success mr-4">login</a>
    		<a href="#registration" class="btn btn-danger mr-4">sign up</a>
    	</div>
    </header>
     <!-- end header jumbotron -->

     <!-- start intoduction -->
     <div class="container">
     	<div class="jumbotron">
     		<h3 class="text-center">DK SERVICE</h3>
     		<p>hi this is dhruv kumar from gaya bihar im am studing in banglore in sambhram college of institute
     		i like watching movies,series ,and specially animated movies or series</p>
     	</div>
     </div> <!-- end container intoduction -->


<!-- start service center -->

<div class="container text-center border-bottom " id="Services">
	<h2>our services</h2>
	<div class="row mt-4">
		<div class="col-sm-4 mb-4 "> 
			<a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
			<h4 class="mt-4">ELECTRONICS APPLICATION</h4>

		</div>
		<div class="col-sm-4 mb-4 "> 
			<a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
			<h4 class="mt-4">mentanance</h4>

		</div>
		
		<div class="col-sm-4 mb-4 "> 
			<a href="#"><i class="fas fa-cogs fa-8x text-success"></i></a>
			<h4 class="mt-4">fault repair</h4>

		</div>	
		</div>
</div><!-- end service center -->


<!-- registration form -->
<?php include('userregistration.php') ?>
><!-- end  registration form -->

<!-- happy customer -->
<div class="jumbotron bg-danger">
	<div class="container">
	<h2 class="text-center text-white">happy customer</h2>
	<div class="row mt-5">
		<div class="col-lg-3 col-sm-6">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/a1.jpeg" class="img-fluid" style="border-radius: 100px;" alt="a1">
				<h4 class="card-text">Dhruv</h4>
				<p class="card-text">hokjkdhhehenldanc</p>
				</div>
			</div>
			
		</div><!--end first column -->


		<div class="col-lg-3 col-sm-6">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/b1.jpeg" class="img-fluid" style="border-radius: 100px;" alt="b1">
				<h4 class="card-text">girl</h4>
				<p class="card-text">hokjkdhhehenldanc</p>
				</div>
			</div>
			
		</div><!--end first column -->	


		<div class="col-lg-3 col-sm-6">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/c1.jpeg" class="img-fluid" style="border-radius: 100px;" alt="c1">
				<h4 class="card-text">Deepak</h4>
				<p class="card-text">hokjkdhhehenldanc</p>
				</div>
			</div>
			
		</div><!--end first column -->	

		<div class="col-lg-3 col-sm-6">
			<div class="card shadow-lg mb-2">
				<div class="card-body text-center">
				<img src="images/d1.jpeg" class="img-fluid" style="border-radius: 100px;" alt="d1">
				<h4 class="card-text">girl</h4>
				<p class="card-text">hokjkdhhehenldanc</p>
				</div>
			</div>
			
		</div><!--end first column -->	


	</div>
</div>	
</div><!--end happy customer -->	

<!-- start contact us -->
<div class="container" id="Contact">
	<h2 class="text-center mb-4">contact us </h2>
	<div class="row">
<div class="col-md-8"><!-- start first column -->
	<form action="" method="post"> 
		<input type="text" class="form-control" name="name" placeholder= "Name"><br>
		<input type="text" class="form-control" name="sbject" placeholder= "subject"><br>
		<input type="email" class="form-control" name="email" placeholder= "Email"><br>
		<textarea class="form-control" name="message" placeholder="how can we help you?" style="height:150px;" 
		></textarea><br>
		<input type="submit" class="btn btn-primary" value="send" name="submit"><br><br>

	</form>
	
</div> <!-- end first column -->
<div class="col-md-4 text-center"><!-- start second  column -->
	<strong>Headqurder:</strong><br>
	DK pvt.ltd<br>
	jufhyrjf<br>
	ojfhhfe<br>
	jufhyrjf<br>

	<strong>Headqurder:</strong><br>
	DK pvt.ltd<br>
	jufhyrjf<br>
	ojfhhfe<br>
	jufhyrjf<br>

</div> <!-- end second column -->
		

	</div> 
</div><!-- end contact us -->

<!-- start footer-->
<footer class="container-fluid bg-dark mt-5 text-white">
	<div class="container">
		<div class="row py-3">
			<div class="col-md-6">
				<span class="pr-2">Follow us:</span>
				<a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
			
		</div>
		 <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Someone &copy; 2018.
          </small>
          <small class="ml-2"><a href="#">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
	</div>
</div>

</footer>


<!--javascript -->	
<script src="js/jquery.min.js"> </script>
<script src="js/popper.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/all.min.js"> </script>

</body>
</html>