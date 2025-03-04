<?php 
      include('common/connection.php');
?>
<?php 
      if(!empty($_POST['contactform']))
	  {
		  $fullname=$_POST['fname'];
		  $email=$_POST['eaddress'];
		  $message=$_POST['message'];
		  $query="insert into contactus(fullname,email,message) values ('$fullname','$email','$message')";
		  if(mysqli_query($connect,$query))
		  {
			  echo "Contact Form Saved";
		  }
		  else
		  {
			  echo "Contact Form not Saved";
		  }
	  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-1</title>
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
				<div class="categorious">
					<div class="cate-heading">
						<p>CATEGORIES</p>
					</div>
					<div class="items">
						<?php include ('common/categories.php');?>
					</div>
				</div>
				<div class="contact">
					<div class="contact-us">
						<p>CONTACT US</p>
					</div>
					<div class="costomer-info">
						<div class="costomer-service">
							<p>Customer Service:91 7508115758</p>
							<p>Ludhiana,Punjab,INDIA</p>
							<p>Yorex Infotec.</p>
						</div>
						<hr class="hr">
						<div class="info">
							<div class="required-info">
								<h4>Contact Us</h4>
								<p>Have a question? We have 24x7 Costomer Service.</p>
								<p>Befor you contact us,skim through our self Serve opton and Frequently Asked Question for Quicker answer.</p>
								<p>Want to know more about the status of the orders?</p>
								<p>Login to view our order.</p>
							</div>
						</div>
						<div class="border">
							<div class="border-1">
								<div class="border-2">
									<p>Contact Us</p>
								</div>
								<div class="requir-info">
									<span>*Required information</span>
								</div>
								<div class="input-info">
									<div class="input-information">
										<form method="post">
											<table class=" form">
												<tr>
													<td ><p>full Name* </p></td>
													<td><input type="text" name="fname"></td>
												</tr>
												<tr>
													<td > <p>E-mail Address </p></td>
													<td><input type="text" name="eaddress"></td>
												</tr>
												<tr>
													<td> <p>Message</p></td>
													<td><textarea name="message"></textarea></td>
												</tr>
												<tr>
													<td colspan="3" > 
													    <input type="submit" name="contactform" value="Save form">
													</td>
												</tr>
											</table>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="snd-btn">
							<button>Send Now</button>
						</div>
					</div>
				</div>
				<?php include('common/footer.php')?>
			</div>
		</div>
	</div>
</body>
</html>