<?php
   include('connection.php');
       if(!empty($_GET['did']))
	   {
		 $id=$_GET['did'];
		 $query="delete from category where id=$id";
		 if(mysqli_query($connect,$query))
		 {
			?>
			<script>
               alert("Record Deleted");
			</script>
			<?php
		 }
		 else
		 {
			?>
			    <script>
               alert("Record Not Deleted");
			</script>
			<?php
		 }
	   }
?>
<html>
  <head>
    <title>Page manager</title>
	<link rel="stylesheet" href="login1css/style.css"/>
  </head>
  <body>
    <?php include("logo.php");?>
	<div class="header1">
	<div class="headern">
	  <p class="date"><?php echo date ('d-m-y') ?></p>
	  </div>
	</div>
	<div class="body01">
	 <div class="bin1">
	 <?php include("leftlist.php");?>
	   </div>
	   <div class="bin2">
		<h3 class="pm">Category Manager</h3>
		<p>This section displays the list of Category.</p>
		<p class="clickhere"><a href="">Click here</a> to create <a href="">New Page</a></p>
	   <br/>
	   <form>
	   <table class="t2 noborder">
	     <tr>
		    <td colspan="2">Search</td>
		 </tr>
		 <tr>
		    <td>Search By Category Name:</td>
			<td><input type="text" name="s"/></td>
			<td><input type="submit" value="Search" /></td></td>
		 </tr>
	   </table>
        </form>
	   <br/>
	    <p>Page 1 of 2,showing 10 records out of 13 total,starting on records 1, ending on 10</p>
	     <table class="t3">
		   <tr>
		      <th>Id</th>
			  <th>Category Name</th>
			  <th>Edit</th>
			  <th>Delete</th>
		   </tr>
		   <?php 
		          $limit=5;
				  if(empty($_GET['pn']))
				  {
					  $start=0;
				  }
				  else
				  {
					  $pn=$_GET['pn'];
				   $end=$pn*$limit;
				   $start=$end-$limit;
				  }
				 if(!empty($_GET['s']))
			  {
				$search=$_GET['s'];
				$query="SELECT * FROM category WHERE categoryname LIKE '%$search%' LIMIT $start,$limit";
			  }
			  else
			  {
				$query="SELECT * FROM  category LIMIT $start, $limit";
			  }
			  $result=mysqli_query($connect,$query);
			  while($row=mysqli_fetch_assoc($result))
			  { 
		       ?>
		   <tr>
		      <td><?php echo $row['id']?></td>
			  <td><?php echo $row['categoryname']?></td>
			  <td><a href="AddCategory.php?eid=<?php echo $row['id']?>"><img src="login1images/note.png"/></a></td>
			  <td><a href="CategorySummary.php?did=<?php echo $row['id']?>">Delete</a></td>
		   </tr>
			 <?php } ?>
			 <tr>
			    <td colspan="3">
				<?php
				      $query="select * from category";
				 $result=mysqli_query($connect,$query);
				 $count =mysqli_num_rows($result);
				 $page=ceil($count/$limit);
				 for($i=1; $i<=$page;$i++)
				 { ?>
				    <a href="CategorySummary.php?pn=<?php echo $i;?>"><?php echo $i;?></a>
					<?php } ?>
				</td>
			 </tr>
		 </table>
	   </div>
	</div>
	<div class="footer1"></div>
  </body>
</html>