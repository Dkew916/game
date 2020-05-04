<?php include('dbconnection.php');
if(isset($_REQUEST['rsignup'])){
	if(($_REQUEST['rName'] =="") ||($_REQUEST['rEmail'] == "") ||($_REQUEST['rPassword'] == "")){
		$rmsg = '<div class="alert alert-warning mt-2" role="alert">All Fields are required</div>';
	}
	else
	{
		$sql = "SELECT r_email FROM requesterlogin_tb WHERE r_email='".$_REQUEST['rEmail']."'";
		$result=$conn->query($sql);
		if($result->num_rows==1){
			$rmsg='<div class="alert alert-danger mt-2" role="alert">Email already exist</div>';
		}else{

	
$rName= $_REQUEST['rName'];
$rEmail= $_REQUEST['rEmail'];
$rPassword= $_REQUEST['rPassword'];

$sql="INSERT INTO requesterlogin_tb(r_name,r_email,r_password) VALUES('$rName','$rEmail','$rPassword')";
 if($conn->query($sql)== TRUE){
 	$rmsg ='<div class="alert alert-warning mt-2" role="alert">account succefully created </div>' ;
 }
 else
 {
 	$rmsg ='<div class="alert alert-danger mt-2" role="alert">unable to create account</div>';
 }
 }
 }
}

?>







<!-- registration form -->
<div class="container pt-5" id="registration">
	<h2 class="text-center">create  an account</h2>
	<div class="row mt-4 mb-4">
		<div class="col-md-6 offset-md-3">
			<form action="" class="shadow-lg p-4" method="post">
				<div class="form-group">
					<i class="fas fa-user"></i>
					<lable for="name" class="font-weight-bold pl-2">NAME</lable>
					<input type="text" class="form-control" placeholder="Name" 
					 name="rName">
					
				</div>
				<div class="form-group">
					<i class="fas fa-user"></i>
					<lable for="email" class="font-weight-bold pl-2">Email</lable>
					<input type="text" class="form-control" placeholder="Email" 
					 name="rEmail">
					 <small class="form-text">never share </small>
					
				</div>
				<div class="form-group">
					<i class="fas fa-key"></i>
					<lable for="password" class="font-weight-bold pl-2">password</lable>
					<input type="text" class="form-control" placeholder="Password" 
					 name="rPassword">
				</div>

				<button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="rsignup">Sign up</button>
				<em style="font-size:10px; ">by click sign up aggree term and condition</em>
				<?php if(isset($rmsg))
				{echo $rmsg;} ?>
			</form>
		</div>
	</div>
</div><!-- end  registration form -->