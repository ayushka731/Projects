<?php
   include('connection.php');
   if(!empty($_POST['save']))
   {
	   $cname=$_POST['catname'];
	   if(!empty($_POST['editid']))
	   {
		   $id=$_POST['editid'];
		   $query="update category set categoryname='$cname' where id=$id";
	   }
	   else{
		   $query="insert into category(categoryname) values ('$cname')";
	   }
	   if(mysqli_query($connect,$query))
	   {
		   ?>
		    <script>
			      alert("Category Inserted");
			</script>
		   <?php
	   }
	   else 
	   {
		   ?>
		    <script>
			    alert ("Category Not Inserted");
			</script>
		   <?php
	   }
   }
   if(!empty($_GET['eid']))
   {
	 $id=$_GET['eid'];
	 $query="select * from category where id=$id";
	 $result=mysqli_query($connect,$query);
	 $r=mysqli_fetch_assoc($result);
	 print_r($r);
   }
?>

<html>
  <head>
    <title>Page Manager 2</title>
	<link rel="stylesheet" href="login2css/style.css"/>
  </head>
  <body>
  <?php include("logo.php");?>
	<div class="header1">
	  <div class="h1">
	    <p><?php echo date ('d-m-y') ?></p>
	  </div>
	</div>
	<div class="body">
	<div class="left">
		<?php include("leftlist.php");?>
	</div>
	<div class="right">
	   <h3>Category Manager</h3>
	   <hr/>
	   <br/>
	   <table class="bigtable">
	     <tr>
		    <td>Add Category</td>
		 </tr>
		 <tr>
		 <td>
			<form method="post">
				<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']?>">
		 <table class="innertable">
			<tr class="in1">
			  <td align="right"> Category Name</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="catname"/></td>
			</tr>
			
			<tr>
		   <td> </td>
		   <td> <input  type="submit" value="Save" name="save"/><input type="button" value="Cancel" name="cancel"/></td>
		 </tr>
		 </table>
          </form>
		 </td>
		 </tr>
		 
	   </table>
	</div>
	</div>
	<div class="footer"></div>
  </body>
</html>