<?php   session_start();?>
<?php 
      include('common/connection.php');
?>
<?php 
       if(!empty($_GET['addtocart']))
	   {
		   $pid=$_GET['pid'];
		   $uid=$_GET['uid'];
		   $qty=$_GET['qty'];
		   $query="insert into cart (userid,productid,qty) values ($uid,$pid,$qty)";
		   if(mysqli_query($connect,$query))
		   {
			   echo "Record Inserted";
			   $query = "UPDATE product SET productquantity = productquantity - $qty WHERE id = $pid";
               mysqli_query($connect, $query);
		   }
		   else
		   {
			   echo "Record Not Inserted";
		   }
	   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-3</title>
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
				<?php 
				    $id=$_GET['pid'];
					$query="select * from product where id=$id";
					$result=mysqli_query($connect,$query);
					$row=mysqli_fetch_assoc($result);
				 ?>
					<div class="contact-us">
						<p><?php echo $row['productname']?></p>
					</div>
					<div class="dish-info">
						<div class="machine-pic">
							<div class="img">
								<img src="<?php echo $row['productimage']?>">
							</div>
							<div class="stock">
							<!-- this section for qty minus -->
								<p>In Stock: <?php echo $row['productquantity']?></p>
							</div>
							<div class="detail">
								<span>Details:</span>
								<p><?php echo $row['productname']?></p>
							</div>
						</div>
						<div class="machine-info">
							<div class="washer">
								<p><?php echo $row['productname']?></p>
							</div>
							<div class="model-info">
								<span>Model:<?php echo $row['productname']?></span>
								<p>Manufacturer:<?php echo $row['productname']?></p>
							</div>
							<div class="quantity">
								<form method="get">
								<input type="hidden" name="pid" value="<?php echo $_GET['pid']?>">
								<input type="hidden" name="uid" value="<?php echo $_SESSION['userid']?>">
									<table>
										<tr>
											<td class="qty">Enter quantity</td>
											<td><input type="text" name="qty"></td>
										</tr>
									</table>
								
								<div class="price">
									<span><?php echo $row['productprice']?></span>
								</div>
							</div>
							<div class="cart">
							<?php 
							     if(empty($_SESSION['username']))
								 { ?>
								<a href="signup.php"><input type="button" value="First Login to Buy"></a>
								
								 <?php } else {?>
								 
								 <input type="submit" name="addtocart" value="Add to Cart">
								 <?php } ?>
							</div>
							</form>
							<div class="checkout">
								<a href="checkout.php"><input type="submit" name="" value="checkout"></a>
							</div>
						</div>
					</div>
					<div class="info">
						<form method="get">
							<table class="table-info">
								<tr>
									<td class="nme">Enter name</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Email</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="nme">Enter Review</td>
									<td><textarea></textarea></td>
								</tr>
								<tr>
									<td class="nme">Rating</td>
									<td><input type="" name=""></td>
								</tr>
								<tr>
									<td class="btnn-1">
										<input type="submit" name="" value="Submit query">
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<?php include('common/footer.php')?>
			</div>
		</div>
	</div>
</body>
</html>