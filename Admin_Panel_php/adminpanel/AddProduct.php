<?php
   include('connection.php');
   if(!empty($_POST['save']))
   {
	    $catid=$_POST['catname'];
		$pname=$_POST['pname'];
		$pdesc=$_POST['pdesc'];
		$pprice=$_POST['pprice'];
		$pimagename=$_FILES['pimage']['name'];
		$ptemppath=$_FILES['pimage']['tmp_name'];
		$currtime = round(microtime(true) * 1000);
		$extarr = explode(".",$pimagename);
		$ext=$extarr[1];
		$fullfilename=$currtime.".".$ext;
		$query="insert into product(category_id,pname,pdescription,pprice,pimage) values ('$catid','$pname','$pdesc','$pprice','$fullfilename')";
	   if(mysqli_query($connect,$query))
	   {
		   move_uploaded_file($ptemppath,"uploadimage/".$fullfilename);
		   
		   ?>
		    <script>
			      alert("Product Inserted");
			</script>
		   <?php
	   }
	   else 
	   {
		   ?>
		    <script>
			    alert ("Product Not Inserted");
			</script>
		   <?php
	   }
   }
   /*if(!empty($_GET['eid']))
   {
	 $id=$_GET['eid'];
	 $query="select * from category where id=$id";
	 $result=mysqli_query($connect,$query);
	 $r=mysqli_fetch_assoc($result);
	 print_r($r);
   }*/
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
	   <h3>Product Manager</h3>
	   <hr/>
	   <br/>
	   <table class="bigtable">
	     <tr>
		    <td>Add Product</td>
		 </tr>
		 <tr>
		 <td>
			<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']?>">
		 <table class="innertable">
		 <tr class="in1">
			  <td align="right"> Select Category</td>
			  <td>
			      <select name="catname">
				     <option>&lt;select&gt;</option>
					 <?php  
					     $query="select * from category";
						 $result=mysqli_query($connect,$query);
						 while($cat=mysqli_fetch_assoc($result))
						 {
					 ?>
					    <option value="<?php echo $cat['id']?>"><?php echo $cat['categoryname']?></option>
						 <?php } ?>
				  </select>
			  </td>
			</tr>
			<tr class="in1">
			  <td align="right"> Product Name</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="pname"/></td>
			</tr>
			 <tr class="in1">
			  <td align="right"> Product Description</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="pdesc"/></td>
			</tr>
			<tr class="in1">
			  <td align="right"> Product Price</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="pprice"/></td>
			</tr>
			<tr class="in1">
			  <td align="right"> Product Image</td>
			  <td><input type="file" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="pimage"/></td>
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