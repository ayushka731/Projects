<?php
   include('connection.php');
   if(!empty($_POST['save']))
   {
	   $name=$_POST['name'];
	   $content=$_POST['content'];
	   $status="";
	   if(isset($_POST['status']))
	   {
		$status=$_POST['status'];
	   }
	   if($status=="on")
	   {
		   $status=1;
	   }
	   else
	   {
          $status=0;
	   }
	   if(!empty($_POST['editid']))
	   {
          $id=$_POST['editid'];
		  $query="update addpage set name='$name' , content='$content',status='$status' where id='$id'";
	   }
	   else
	   {
           $query="insert into addpage (name,content,status) values ('$name','$content','$status')";
	   }
	   if(mysqli_query($connect,$query))
	   {
		   echo"Record  Inserted";
	   }
	   else
	   {
		   echo "Record Not Inserted";
	   }
   }
   if(!empty($_GET['eid']))
   {
	 $id=$_GET['eid'];
	 $query="select * from addpage where id=$id";
	 $result=mysqli_query($connect,$query);
	 $r=mysqli_fetch_assoc($result);
	 //print_r($r);
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
	   <h3>Page Manager</h3>
	   <hr/>
	   <br/>
	   <table class="bigtable">
	     <tr>
		    <td>Add Page</td>
		 </tr>
		 <tr>
		 <td>
			<form method="post">
				<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']?>">
		 <table class="innertable">
			<tr class="in1">
			  <td align="right">Name</td>
			  <td><input type="text" value="<?php if(!empty($r['name'])) echo $r['name']?>" name="name"/></td>
			</tr>
			<tr>
			  <td align="right">Content</td>
			  <td><textarea type="text" class="bu" name="content">
			  <?php if(!empty($r['content'])) echo $r['content']?>
			  </textarea></td>
			</tr>
			<tr class="in1">
			  <td align="right">Status</td>
			  <td>
			  <?php if(!empty($r['status']) && $r['status']==1) {?>
			  <input checked name=" status" type="checkbox" style="width:20px"/>
			   <?php } else {?>
				<input  name=" status" type="checkbox" style="width:20px"/>
				<?php }?>
			</td>
			</tr>
			<tr class="co1">
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