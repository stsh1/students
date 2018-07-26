<?php
session_start();
?>
<html>
	<head>
		<title>SIGN UP</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
	<div class="container">
	<?php include 'header.php'?>
	
		<form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
		<center><?php echo @$_GET['error'] ?></center>
		<?php include 'footer.php'  ?>
		<div>
	</body>
</html>



<?php

	/*$con=mysql_connect("localhost","root","");
	$db=mysql_select_db('students',$con);*/
	
	include('config.php');
		if(isset($_POST['login'])){
			$admin_name=$_SESSION['admin_name']=$_POST['admin_name'];
			$admin_pass=$_POST['admin_pass'];
			
			$query="select * from login where user_name='$admin_name' AND user_password='$admin_pass'";
			$run=mysql_query($query);
			
			if(mysql_num_rows($run)>0){
				
				echo "<script>window.open('view.php?logged=logged in successfully...!','_self')</script>";
			}
			else
			{
				echo "<script>alert('Password,User Name or email is incorrect!')</script>";
			}
			
			
		}
?>
