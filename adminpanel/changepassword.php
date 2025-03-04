<?php
   include('connection.php');
   if(!empty($_POST['save']))
   {
	   $op=$_POST['oldpass'];
	   $np=$_POST['newpass'];
	   $cnp=$_POST['cnewpass'];
	   if($np==$cnp)
	   {
		   $query="select * from login where password = '$op'";
		   $result=mysqli_query($connect,$query);
		   $count=mysqli_num_rows($result);
		   if($count>0)
		   {
			   $query="update login set password='$np'";
			   mysqli_query($connect,$query);
			   echo "Password Updated Successfully";
		   }
		   else{
			   echo "Old password does not match";
		   }
	   }
	   else
	   {
		   echo "New Password & Confirm New Password does not match";
	   }
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
	   <h3>Change Password</h3>
	   <hr/>
	   <br/>
	   <table class="bigtable">
	     <tr>
		    <td>Change Password</td>
		 </tr>
		 <tr>
		 <td>
			<form method="post">
				<input type="hidden" name="editid" value="<?php if(!empty($r['id'])) echo $r['id']?>">
		 <table class="innertable">
			<tr class="in1">
			  <td align="right"> Enter Old Password</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="oldpass"/></td>
			</tr>
			<tr class="in1">
			  <td align="right"> Enter New Password</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="newpass"/></td>
			</tr>
			<tr class="in1">
			  <td align="right">Confirm New Password</td>
			  <td><input type="text" value="<?php if(!empty($r['categoryname'])) echo $r['categoryname']?>" name="cnewpass"/></td>
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