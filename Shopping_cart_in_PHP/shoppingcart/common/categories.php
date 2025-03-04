<ul>
	<?php
	     $query="select * from categories";
		 $result=mysqli_query($connect,$query);
		 while($row=mysqli_fetch_assoc($result))
		 { ?>
			  <a href="products.php?cid=<?php echo $row['id']?>"><li> <?php echo $row['categoryname']?> </li></a>
			  <?php } ?>	
</ul>