<?php
   include('common/connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>ENEST-5</title>
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
				<div class="main-img">
					<img src="images/16.png">
				</div>
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
						<p>FEATURED PRODUCTS</p>
					</div>
					<div class="Camera-info">
						<!-- <div class="cam-info"> -->
						<?php
						    $query="select * from product";
							$result=mysqli_query($connect,$query);
							while($row=mysqli_fetch_assoc($result))
							{
						?>
							<div class="samsung-cam">
								<div class="cam-info">
									<img src="<?php echo $row['productimage']?>">
									<div class="sam-prc">
										<span><?php echo $row['productname']?></span>
										<p><?php echo $row['productprice']?></p>
									</div>
									<hr class="hr2">
									<div class="cart-btn">
										<i class="fa fa-plus-circle iconn" aria-hidden="true"></i>
										<!-- <i class="fa fa-shopping-cart" aria-hidden="true"></i> -->
										<i class="fa fa-plus" aria-hidden="true"></i>
										<i class="fa fa-cart-plus" aria-hidden="true"></i>
										<input type="submit" name="" value="Add to cart">
									</div>
								</div>
							</div>
							<?php } ?>
						<!-- </div> -->
					
				<?php include('common/footer.php')?>
			</div>
		</div>
	</div>
</body>
</html>