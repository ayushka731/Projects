<?php   session_start();?>
<?php   include('common/connection.php');?>
<?php
     if(!empty($_POST['signup']))
	 {
		 $fname=$_POST['fullname'];
		 $email=$_POST['email'];
		 $pass=$_POST['pass'];
		 $query="insert into signup(fullname,email,password) values('$fname','$email','$pass')";
		 if(mysqli_query($connect,$query))
		 {
			 ?>
			 <script>
			      alert ("Sign Up Completed");
			 </script>
			 <?php
		 }
		 else
		 {
			?>
			<script>
				 alert ("Sign Up Not Completed. Try again");
			</script>
			<?php
		 }
	 }
	 if(!empty($_POST['loginform']))
	 {
		$username=$_POST['un'];
		$password=$_POST['ps'];
		$query="select * from signup where email='$username' and password='$password'";
		$result=mysqli_query($connect,$query);
		$r=mysqli_fetch_assoc($result);
        $count=mysqli_num_rows($result);
		if($count>0)
		{
			$_SESSION['username']=$r['fullname'];
			$_SESSION['userid']=$r['id'];
			?>
			<script>
				 alert ("Login Successful");
			</script>
			<?php
		}
		else
		{
			?>
			<script>
				 alert ("Login Not Successful");
			</script>
			<?php
		}
	 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-2</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Catamaran&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="main-div">
		<?php include ('common/header.php');?>
		<div class="null">
			
		</div>
		<div class="main-categorious">
			<div class="footer">
				<div class="login-here">
					<div class="login">
						<p>Login Here</p>
						<div  class="user-info">
							<form method="post">
								<table class="login-1">
									<tr class="inpt">
										<td ><span>Email Id</span></td>
										<td><input type="text" name="un"></td>
									</tr><br>
									<tr class="inpt">
										<td ><span>Password</span></td>
										<td><input type="password" name="ps"></td>
									</tr>
									<tr class="logn-btn" >
										<td></td>
										<td><input class="log" type="submit" name="loginform" value="Login">
										</td>
									</tr>
								</table>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="sign-up">
				<div class="sign">
					<p>New to Enest? <a href=""> Sign up</a></p>
					<div  class="user-info">
						<form method="post">
							<table class="login-1">
								<tr class="inpt-1">
									<td ><span>Full Name</span></td>
									<td><input type="text" name="fullname"></td>
								</tr><br>
								<tr class="inpt-1">
									<td ><span>Email</span></td>
									<td><input type="text" name="email"></td>
								</tr>
								<tr class="inpt-1">
									<td ><span>Password</span></td>
									<td><input type="password" name="pass"></td>
								</tr>
								<tr class="logn-btn" >
									<td></td>
									<td><input class="log" type="submit" name="signup" value="Sign up">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
			<?php include('common/footer.php')?>
			</div>
		</div>
	</div>
</body>
</html>