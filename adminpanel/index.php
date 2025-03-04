<?php
    include('connection.php');
	if(!empty($_POST['save']))
	{
		$username=$_POST['un'];
		$password=$_POST['pw'];
		$query="select * from login where username='$username' and password='$password'";
		$result=mysqli_query($connect,$query);
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			header ('location:addpage.php');
		}
		else
		{
			echo "Login Failed";
		}
	}
?>
<html>
   <head>
     <title>Login page</title>
	 <link rel="stylesheet" href="logincss/cssstyle.css"/>
   </head>
   <body>
      <div class="header1">
	     <img src="loginimage/loginpage.jpg"/>
	  </div>
	  <div class="header2">
	    <div class="he1">
		  <p><?php echo date ('d-m-y') ?></p>
		</div>
	  </div>
	  <div class="bo1">
	     <div class="bo2">
		 <form method="post">
	     <table>
		   <tr>
		     
			 <th colspan="2">Login</th>
		   </tr>
		   <tr>
		     <td>Username</td>
			 <td><input type="text" name="un"/></td>
		   </tr>
		   <tr>
		     <td>Password</td>
			 <td><input type="text" name="pw"/></td>
		   </tr>
		   <tr>
		     <td></td>
			 <td><input type="submit" value="Login" name="save"/></td>
		   </tr>
		 </table>
		 </form>
		 </div>
	  </div>
	  <div class="foo1">
	    
	  </div>
   </body>
</html>