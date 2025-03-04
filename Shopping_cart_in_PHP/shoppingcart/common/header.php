<?php   
   if(!empty($_GET['log']))
   {
	   session_destroy();
	   header('location:index.php');
   }
   if (isset($_GET['search'])) 
   {
       $search = $_GET['search'];
       $query = "SELECT * FROM product WHERE name LIKE '%$search%'";
   }
   else
	{
		$query="select * from product";
	}
?>
<div class="head-div">
			<div class="main">
				<div class="head">
					<span>My Shopping Project</span>
					<p>THE BIGGEST CHOICE OF THE WEB</p>
				</div>
				<div class="btn">
				 <?php 
				     if(empty($_SESSION['username']))
					 {  ?>  <a href="signup.php"><input type="button" name="" value="Log in"></a>
				 <?php } else {?>
					<a href="signup.php?log=1"><input type="button" name="" value="Logout <?php echo $_SESSION['username']?>"></a>
					 <?php } ?>
				</div>
			</div>
		</div>
		<div class="home-page">
		 	<div class="pagnation">
				<div class="list">
					<ul>
						<a href="index.php"><li>HOME</li></a>
						<a href="newproducts.php"><li>New Products</li></a>
						<a href="specials.php"><li>Special</li></a>
						<a href="allproducts.php"><li>All Products</li></a>
						<li>REVIEWS</li>
						<a href="contactus.php"><li>Contact Us</li></a>
						<li>FAQS</li>
					</ul>
				</div>
				<div class="search">
					<div class="search-1">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
						<div class="input">
							<input type="text" name="search" placeholder="search">
						</div>
						<div class="btnn">
							<input type="submit"  value="Search">
						</div>
				        </form>
					</div>
				</div>
			</div>
		</div>